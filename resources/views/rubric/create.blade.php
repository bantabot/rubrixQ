@extends('layouts.admin')

@section('content')

{{--    {{dd($factors)}}--}}

{!! Form::open(['method'=>'POST', 'action'=>'RubricController@store']) !!}

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', array(''=> 'Choose Options') + $categories,  null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('factor_id', 'Factor:') !!}
    {!! Form::select('factor_id', array(''=>'Select Factor') + $factors,  null, ['class'=>'form-control'])!!}
</div>

{{--{!! Form::label('rubric_code', 'CODE:') !!}--}}
{{--{!! Form::number('rubric_code', 11) !!}--}}




    {{--@foreach($factors as $factor)--}}

        {{--<div class="form-group">--}}
            {{--{!! Form::label('factor_id', 'Include '. $factor->name) !!}--}}
            {{--{!! Form::select('factor_id', array($factor->id => 'Yes', '' => 'No') , null, ['class'=>'form-control'])!!}--}}
        {{--</div>--}}
        {{--<div> {!! Form::submit('Add Factor', ['class'=>'btn btn-primary']) !!}</div>--}}

    {{--@endforeach--}}

<div></div>
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
{{--</div>--}}
{!! Form::close() !!}


    @endsection


