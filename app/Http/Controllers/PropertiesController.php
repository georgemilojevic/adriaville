<?php

namespace App\Http\Controllers;

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
            'property' => $property
        ]);
    }

    public function allCountryProperties(string $country)
    {
        $property = new Property();

        return view('search', [
            'properties' => Property::fetchByCountry($country),
        ]);
    }
}
