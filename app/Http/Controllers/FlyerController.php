<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlyerRequest;
use App\Http\Utilities\Country;
use App\Models\Flyer;
use App\Models\Photo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FlyerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['execpt' => ['show']]);
        parent::__construct();
    }

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
        $flyer = Flyer::LocatedAt($zip, $street);
        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($zip, $street, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpeg, jpg, png',
        ]);

        $photo = $this->makePhoto($request->file('photo'));

        $flyer = Flyer::LocatedAt($zip, $street);

        if (!$flyer->ownerBy($this->user)) {
            if ($request->ajax()) {
                return response(['message' => 'No way.'], 403);
            }

            flash('No way.');
            return redirect('/');
        }

        $photo = $this->makePhoto($request->file('photo'));

        $flyer->addPhoto($photo);
    }

    public function makePhoto(UploadedFile $file)
    {
        return Photo::named($file->getClientOriginalName())->move($file);
    }
}
