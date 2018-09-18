@extends('layouts.admin')

@section('content')

    <h1>Create a new Place</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'PlaceController@store']) !!}

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
        {!! Form::submit('Create Place', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
