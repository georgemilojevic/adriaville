<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Customer;
use App\Mail\BookingReceived;
use App\Property;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function requestBooking(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        try {
            $customer = $this->saveCustomer($data);
            $this->saveBooking($data, $customer);
            $this->sendCustomerEmail($data);

            return response()->json([
                'name' => $customer->full_name,
                'message' => 'Your booking request has been sent. Please wait for our agent to reach you with your reservation details'
            ]);
        } catch (Exception $exception) {
            throw new \Exception('Unable to process this request, please try again later!');
        }
    }

    /**
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    private function saveCustomer($data)
    {
        try {
            $customer = Customer::firstOrNew(['email' => $data['email']]);
            if(empty($data['email'])) {
                throw new \Exception('Customer not saved!');
            }
            $customer->email = $data['email'];
            $customer->full_name = $data['name'];
            $customer->phone_number = $data['phone'];
            $customer->save();
            return $customer;
        } catch (\Exception $e) {
            throw new \Exception('Customer not saved! Please check your details.');
        }
    }

    /**
     * @param $data
     * @param $customer
     * @return Booking
     * @throws \Exception
     */
    private function saveBooking($data, $customer)
    {
        $booking = new Booking();
        $date = new \DateTime();

        try {
            $booking->start_date = $date::createFromFormat('d/m/Y', $data['startDate']['date']);
            $booking->checkout_date = $date::createFromFormat('d/m/Y', $data['endDate']['date']);
            $booking->status = 'pending';
            $booking->customer_id = $customer->id;
            $booking->property_id = $data['propertyId'];
            if (!empty($data['extras'])) {
                $booking->private_chef = $data['extras']['chef'];
                $booking->babysitter = $data['extras']['babysitter'];
                $booking->chauffeur = $data['extras']['chauffeur'];
                $booking->yacht = $data['extras']['yachtcharter'];
            }
            $booking->save();
            return $booking;
        } catch (\Exception $e) {
            throw new \Exception('Booking not saved! Please check have you selected correct check in times.');
        }
    }

    /**
     * @param string $data
     * @throws \Exception
     */
    public function sendCustomerEmail($data)
    {
        try {
            $property = Property::where('id', $data['propertyId'])->with('translations')->firstOrFail();
            $data['images'] = json_decode($property->images, true);
            $data['propertyName'] = $property->title;

            Mail::to($data['email'])
                ->send(new BookingReceived($data));
            if (Mail::failures()) {
                throw new \Exception('Something went wrong, email confirmation not sent. Please contact us on info@adriaville.com');
            }
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
