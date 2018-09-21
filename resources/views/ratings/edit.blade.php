@extends('layouts.admin')

@section('content')



    <h1>{{$category->name}}</h1>






    <table class="table">
        <thead>
        <tr>
            <th>Factor</th>

        </tr>
        </thead>
        <td> {!! Form::open(['method'=>'POST', 'action'=>['RubricController@store']]) !!}


         <tbody>
         <tr><td> <div class="form-group">
                 {!! Form::label('place_id', 'Place:') !!}
                 {!! Form::select('place_id', array(''=>'Choose Place') + $places, null, ['class'=>'form-control'])!!}
             </div>





             </td></tr>

         <tr><td> <div class="form-group">
                     {!! Form::label('place_id', 'Factor:') !!}
                     {!! Form::select('place_id', array(''=>'Choose Place') + $places, null, ['class'=>'form-control'])!!}
                 </div>





             </td></tr>
         @foreach($rubrics as $rubric)
             <tr>

                 <td>{{$rubric->factor->name}}</td>

                 <td> <div class="form-group">
                         {!! Form::label('place_id', 'Factor:') !!}
                         {!! Form::select('place_id', array(''=>'Choose Place') + $places, null, ['class'=>'form-control'])!!}
                     </div>





                 </td>


                 {!! Form::close() !!}

             </tr>
         @endforeach


        </tbody>
    </table>


@endsection
