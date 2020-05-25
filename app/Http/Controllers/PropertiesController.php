<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * @param $id
     * @param $language
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($language, $id)
    {
        $property = Property::where('id', $id)->with('translations')->firstOrFail();

        return view('details', [
            'property' => $property,
            'images' => json_decode($property->images, true),
            'facilities' => $property->facilities,
        ]);
    }

    public function allCountryProperties($language, string $country)
    {
        $properties = Property::fetchByCountry(ucfirst($country), 100);

        return view('all-country-properties', [
            'properties' => $properties,
            'country' => ucfirst($country),
        ]);
    }
}
