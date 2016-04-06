@extends('layouts.app')

@section('content')
    <h1>Selling your home?</h1>
    @include('errors.form')
    <div class="row">
        {{ Form::open(['method' => 'POST', 'action' => 'FlyerController@store', 'files' => true, 'class' => 'form-horizontal']) }}
            @include('flyers.form')
        {{ Form::close() }}
    </div>
@stop
