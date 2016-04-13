@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ trans('text.projectflyer') }}</h1>
            <p>
                This is a template for a simple marketing or informational website.
                It includes a large callout called a jumbotron and three supporting pieces
                of content. Use it as a starting point to create something more unique.
            </p>
            @if($signedIn)
                <p>{{ link_to('/flyers/create', trans('text.create_a_flyer'), ['class' => 'btn btn-primary btn-lg', 'role' => 'button']) }}</p>
            @else
                <p>{{ link_to('/register', trans('text.signup'), ['class' => 'btn btn-primary btn-lg', 'role' => 'button']) }}</p>
            @endif
        </div>
    </div>
@stop
