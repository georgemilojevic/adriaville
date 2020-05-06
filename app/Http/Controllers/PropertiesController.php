<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('details', [
            'property' => Property::where('id', $id)->firstOrFail()
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
