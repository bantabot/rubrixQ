@extends('layouts.admin')

@section('content')

{{--    {{dd($factors)}}--}}

{!! Form::open(['method'=>'POST', 'action'=>'RubricController@store']) !!}

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', array(''=> 'Choose Options') + $categories,  null, ['class'=>'form-control'])!!}
</div>





@foreach($factors as $factor)

    <div class="form-group">
        {!! Form::label('factor_id', 'Include '. $factor->name) !!}
        {!! Form::checkbox('factor_id[]', $factor->id, null, ['class'=>'form-control'])!!}

    </div>

@endforeach

<div></div>
    {!! Form::submit('Add Factor', ['class'=>'btn btn-primary']) !!}
{{--</div>--}}
{!! Form::close() !!}


    @endsection


