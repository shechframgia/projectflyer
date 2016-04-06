@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1> {{ $flyer->street }} </h1>
            <h2> {{ $flyer->price }} </h2>
            <hr>
            <div> {!! nl2br($flyer->description) !!} </div>
        </div>
        <div class="col-md-8 gallery">
            @forelse($flyer->photos as $photo)
                {{ Html::image($photo->thumbnail_path, '', ['class' => 'gallery_image col-md-3', 'data-holder-rendered' => 'true']) }}
            @empty
                <h4>No Result</h4>
            @endforelse
        </div>
    </div>
    <hr>
    <h2>{{ trans('text.add_your_photos') }}</h2>
    {{ Form::open(['id' => 'addPhotosForm', 'method' => 'POST', 'url' => '/' . $flyer->zip . '/' . $flyer->street . '/photos', 'class' => 'dropzone']) }}
    {{ Form::close() }}
@stop

@section('scripts.footer')
    <script type="text/javascript" src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js') }}"></script>
    <script type="text/javascript">
        Dropzone.options.addPhotosForm = {
            paramName: 'photo'
        };
    </script>
@stop
