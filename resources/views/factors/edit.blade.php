@extends('layouts.admin')

@section('content')

    <h1>Create a new Rubrix</h1>

    {!! Form::model($factor, ['method'=>'PATCH', 'action'=>['FactorController@update', $factor->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::submit('Update Factor', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE', 'action'=>['FactorController@destroy', $factor->id]]) !!}

    <div class="form-group">


        {!! Form::submit('Delete Factor', ['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

@endsection
