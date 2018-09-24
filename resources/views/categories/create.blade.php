@extends('layouts.admin')

@section('content')

<h1>What is the category?</h1>

{!! Form::open(['method'=>'POST', 'action'=>'CategoryController@store']) !!}

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
    {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

    @endsection
