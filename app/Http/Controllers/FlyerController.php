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
        flash()->success('Succesfully', 'Your flayer has been created!');
        return redirect()->back();
    }

    public function show($zip, $street)
    {
        $flyer = Flyer::LocatedAt($zip, $street)->first();
        return view('flyers.show', compact('flyer'));
    }
}
