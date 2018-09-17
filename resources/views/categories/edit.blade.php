@extends('layouts.admin')

@section('content')

    <h1>Create a new Rubrix</h1>

    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['CategoryController@update', $category->id]]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $category->id]]) !!}

    <div class="form-group">


        {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

@endsection
