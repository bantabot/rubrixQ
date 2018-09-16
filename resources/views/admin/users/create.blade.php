@extends('layouts.admin')

@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', array(''=> 'Choose Options') + $roles,  null, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control'])!!}
    </div>
        <div>
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}


    @endsection
