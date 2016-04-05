<?php

namespace App\Http\Controllers;

class FlyerController extends Controller
{
    public function create()
    {
        return view('flyers.create');
    }
}
