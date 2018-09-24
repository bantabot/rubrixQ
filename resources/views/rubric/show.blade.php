@extends('layouts.admin')

@section('content')



<h1>{{$category->name}}</h1>
<a href="{{route('rating.show', $category->id)}}/"><button class="btn btn-primary" >Add Score</button></a>






     <table class="table">
         <thead>
           <tr>
             <th>Factor</th>

           </tr>
         </thead>
         <tbody>
         @foreach($rubrics as $rubric)
           <tr>

             <td class="col-md-8 ">{{$rubric->factor->name}}</td>
               <td></td>

              <td> {!! Form::open(['method'=>'DELETE', 'action'=>['RubricController@destroy', $rubric->id]]) !!}

               {!! Form::submit('Remove Factor', ['class'=>'btn btn-danger col-md-4 center']) !!}
               </td>

               {!! Form::close() !!}

           </tr>
         @endforeach



         </tbody>
       </table>

{!! Form::open(['method'=>'POST', 'action'=>'RubricController@store']) !!}


@foreach($factors as $factor)

    <div class="form-group">
        {!! Form::label('factor_id', 'Include '. $factor->name) !!}
        {!! Form::hidden('category_id', $category->id, null) !!}
        {!! Form::checkbox('factor_id[]', $factor->id, null, ['class'=>'form-control'])!!}

    </div>

@endforeach

<div></div>
{!! Form::submit('Add Factor', ['class'=>'btn btn-primary']) !!}
{{--</div>--}}
{!! Form::close() !!}


    @endsection
