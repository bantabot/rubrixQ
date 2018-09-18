@extends('layouts.admin')

@section('content')

    <h1>Create a new Rubrix</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'FactorController@store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class'=>'form-control']) !!}
    </div>
    {{--<div>--}}
    {{--{!! Form::button('Add Factor', ['class'=>'btn btn-primary']) !!}--}}
    {{--</div>--}}
    <div>
        {!! Form::submit('Create Factor', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
