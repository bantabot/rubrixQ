@extends('layouts.admin')


@section('content')

    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}

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
            {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

    <div class="form-group">


        {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}



    @endsection
