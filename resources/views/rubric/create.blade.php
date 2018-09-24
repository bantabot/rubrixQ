@extends('layouts.admin')

@section('content')

{{--    {{dd($factors)}}--}}

{!! Form::open(['method'=>'POST', 'action'=>'RubricController@store']) !!}

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', array(''=> 'Choose Options') + $categories,  null, ['class'=>'form-control'])!!}
</div>


<div class="row">


@foreach($factors as $factor)

    <div class="form-group">
        <div class="col-md-3">
        {!! Form::label('factor_id', $factor->name) !!}

        {!! Form::checkbox('factor_id[]', $factor->id, null, ['class'=>'form-control'])!!}</div>

    </div>

@endforeach
</div>

<div class="row">
    {!! Form::submit('Add Factor', ['class'=>'btn btn-primary']) !!}
</div>
{{--</div>--}}
{!! Form::close() !!}


    @endsection


