@extends('layouts.admin')

@section('content')



<h1>{{$category->name}}</h1>






     <table class="table">
         <thead>
           <tr>
             <th>Factor</th>

           </tr>
         </thead>
         <tbody>
         <tr>
             {!! Form::open(['method'=>'POST', 'action'=>'RatingController@store']) !!}
             <td>{!! Form::select('place_id', array(''=>'Choose Place') + $places, null) !!}</td>
         </tr>
         @foreach($rubrics as $rubric)
           <tr>

             <td>{!! Form::label('rubric_id', $rubric->factor->name) !!}
                 {!! Form::hidden('rubric_id', $rubric->id, null) !!}</td>
               <td>{!! Form::selectRange('score', 1, 5, null) !!}</td>
               <td>{!! Form::submit('Add Score') !!}</td>






           </tr>
         @endforeach
         {!! Form::close() !!}

         <tr>
        </tr>



         </tbody>
       </table>


    @endsection
