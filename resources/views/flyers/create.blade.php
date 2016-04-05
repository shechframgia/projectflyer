@extends('layouts.app')

@section('content')
    <h1>Selling your home?</h1>
    {{ Form::open(['method' => 'POST', 'action' => 'FlyerController@store', 'files' => true, 'class' => 'form-horizontal']) }}
        @include('flyers.form')
    {{ Form::close() }}
@stop
