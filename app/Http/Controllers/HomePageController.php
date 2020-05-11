<?php

namespace App\Http\Controllers;

use App\Country;
use App\Exceptions\InvalidCountryName;
use App\HeaderSlider;
use App\Property;
use App\SpotlightVillas;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class HomePageController extends Controller
{
    public const CROATIA = 'Croatia';
    public const SLOVENIA = 'Slovenia';
    public const MONTENEGRO = 'Montenegro';
    public const ALBANIA = 'Albania';
    public const BOSNIA_AND_HERZEGOVINA = 'Bosnia and Herzegovina';

    /**
     * @return \Illuminate\Contracts\View\Factory|View
     * @throws \Exception
     */
    public function index()
    {
        $croatianVillas = Property::fetchByCountry(self::CROATIA);
        $bosnianVillas = Property::fetchByCountry(self::BOSNIA_AND_HERZEGOVINA);
        $slovenianVillas = Property::fetchByCountry(self::SLOVENIA);
        $albanianVillas = Property::fetchByCountry(self::ALBANIA);
        $montenegrianVillas = Property::fetchByCountry(self::MONTENEGRO);
        $spotlightVillas = SpotlightVillas::spotlightVillas();
        $headerSliders = $this->getHeaderSliders();

        return view('index', [
            'croatianVillas' => $croatianVillas,
            'slovenianVillas' => $slovenianVillas,
            'montenegrianVillas' => $montenegrianVillas,
            'albanianVillas' => $albanianVillas,
            'bosnianVillas' => $bosnianVillas,
            'spotlightVillas' => $spotlightVillas,
            'headerSliders' => $headerSliders,
        ]);
    }

    /**
     * @param $language
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function searchProperties($language)
    {
        return view('search');
    }

    protected function propertySlider()
    {
        return Property::query()
            ->select('p.images', 'p.title')
            ->from('properties AS p')
            ->limit(5)
            ->orderBy('p.created_at', 'DESC')
            ->get()
            ;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function search(Request $request)
    {
        $searchedProperties = Property::query()
            ->select(
                'p.title',
                'p.images',
                'c.name as country'
//                'b.start_date', 'b.checkout_date', 'b.status'
            )
            ->from('properties AS p')
            ->leftJoin('bookings AS b', 'p.id', '=', 'b.property_id')
            ->leftJoin('countries AS c', 'p.country_id', '=', 'c.id')
            ->where('c.name', '=', $request->input('data')['country'])
            ->where('p.guests', '>=', $request->input('data')['guests'])
//            ->whereDate('b.checkout_date', '>=', $request->input('checkin_date'))->whereDate('b.start_date', '<=', $request->input('checkout_date'))
        ;

        return redirect()->route('searchProperties', [
            'properties' => $searchedProperties->get()->all(),
            'guests' => $request->input('data')['guests'],
            'checkinDate' => $request->input('data')['startDate']['date'],
            'checkoutDate' => $request->input('data')['endDate']['date'],
        ]);
    }

    public function getHeaderSliders()
    {
        return HeaderSlider::query()
            ->select()
            ->limit(10)
            ->get()
            ;
    }
}
