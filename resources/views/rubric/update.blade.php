@extends('layouts.admin')

@section('content')

    {{--{{var_dump($factors)}}--}}
    {!! Form::model($rubric, ['method'=>'PATCH', 'action'=>['RubricController@update', $rubric->id]]) !!}

    <div class="form-group">
        {!! Form::label('place', 'Place:') !!}
        {!! Form::text('place', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('toast', 'Toast:') !!}
        {!! Form::selectRange('toast', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('presentation', 'Presentation:') !!}
        {!! Form::selectRange('presentation', 1, 5, null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('booty_factor', 'Booty Factor:') !!}
        {!! Form::selectRange('booty_factor', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tenderness', 'Tenderness:') !!}
        {!! Form::selectRange('tenderness', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('smokiness', 'Smokiness:') !!}
        {!! Form::selectRange('smokiness', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sauce', 'Sauce:') !!}
        {!! Form::selectRange('sauce', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('portion_size', 'Portion Size:') !!}
        {!! Form::selectRange('portion_size', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slaw', 'Slaw:') !!}
        {!! Form::selectRange('slaw', 1, 5, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('meat_sauce_combo', 'Meat & Sauce Combo:') !!}
        {!! Form::selectRange('meat_sauce_combo', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('value', 'Value:') !!}
        {!! Form::selectRange('value', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('go_back', 'Go Back:') !!}
        {!! Form::select('go_back', [1 => "No", 5=> "yes"], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recommend', 'Recommend?') !!}
        {!! Form::select('recommend', [1 => "No", 5=> "yes"], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sides', 'Sides:') !!}
        {!! Form::selectRange('sides', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('brunswick_stew', 'Brunswick Stew:') !!}
        {!! Form::selectRange('brunswick_stew', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pickles', 'Pickles:') !!}
        {!! Form::selectRange('pickles', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('service', 'Service:') !!}
        {!! Form::selectRange('service', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dessert', 'Dessert:') !!}
        {!! Form::selectRange('dessert', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ambiance', 'Ambiance:') !!}
        {!! Form::selectRange('ambiance', 1, 5, null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bonus', 'Bonus:') !!}
        {!! Form::selectRange('bonus', 1, 10, null, ['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::submit('Submit Entry', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    {!! Form::open(['method'=>'DELETE', 'action'=>['RubricController@destroy', $rubric->id]]) !!}

    <div class="form-group">


        {!! Form::submit('Delete Entry', ['class'=>'btn btn-danger col-sm-6']) !!}
    </div>

    {!! Form::close() !!}


@endsection
