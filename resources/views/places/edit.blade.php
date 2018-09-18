@extends('layouts.admin')

@section('content')

    <h1>Edit Place</h1>

    {!! Form::model($place, ['method'=>'PATCH', 'action'=>['PlaceController@update', $place->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City') !!}
        {!! Form::text('city', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state', 'State') !!}
        {!! Form::text('state', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('zip_code', 'Zip Code') !!}
        {!! Form::number('zip_code', null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::submit('Edit Place', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE', 'action'=>['PlaceController@destroy', $place->id]]) !!}

    <div class="form-group">


        {!! Form::submit('Delete Place', ['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

@endsection
