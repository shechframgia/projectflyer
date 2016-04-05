    <div class="form-group">
        {{ Form::label('street', trans('text.street')) }}
        {{ Form::text('street', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('city', trans('text.city')) }}
        {{ Form::text('city', null, ['class' => 'form-control']) }}
    </div>
     <div class="form-group">
        {{ Form::label('zip', trans('text.zip_code') . ' / ' . trans('text.postal_code')) }}
        {{ Form::text('zip', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('country', trans('text.country')) }}
        {{ Form::select('country',$countries, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('state', trans('text.state')) }}
        {{ Form::text('state', null, ['class' => 'form-control']) }}
    </div>

    <hr>

     <div class="form-group">
        {{ Form::label('price', trans('text.sale') . ' ' . trans('text.price')) }}
        {{ Form::text('price', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', trans('text.home') . ' ' . trans('text.description')) }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '10']) }}
    </div>
     <div class="form-group">
        {{ Form::label('photos', trans('text.photo')) }}
        {{ Form::file('photos', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit(trans('text.submit'), ['class' => 'btn btn-primary']) }}
    </div>
