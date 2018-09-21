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
         @foreach($rubrics as $rubric)
           <tr>

             <td class="col-md-8 ">{{$rubric->factor->name}}</td>
              <td> {!! Form::open(['method'=>'DELETE', 'action'=>['RubricController@destroy', $rubric->id]]) !!}

               {!! Form::submit('Remove Factor', ['class'=>'btn btn-danger col-md-4 center']) !!}
               </td>

               {!! Form::close() !!}

           </tr>
         @endforeach



         </tbody>
       </table>


    @endsection
