<?php

namespace App\Http\Controllers;

use App\Http\Utilities\Country;

class FlyerController extends Controller
{
    public function create()
    {
        $countries = array_flip(Country::all());
        return view('flyers.create', compact('countries'));
    }
}
