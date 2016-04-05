<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlyerRequest;
use App\Http\Utilities\Country;
use App\Models\Flyer;

class FlyerController extends Controller
{
    public function create()
    {
        $countries = array_flip(Country::all());
        return view('flyers.create', compact('countries'));
    }

    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());
        return redirect()->back();
    }
}
