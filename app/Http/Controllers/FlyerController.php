<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlyerRequest;
use App\Http\Utilities\Country;
use App\Models\Flyer;
use Illuminate\Http\Request;

class FlyerController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

    public function addPhoto($zip, $street, Request $request)
    {
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();
        $file->move('flyer/photos', $name);
        $flyer = Flyer::LocatedAt($zip, $street)->first();
        $flyer->photos()->create(["path" => "flyer/photos/{$name}"]);
        return 'working';
    }
}
