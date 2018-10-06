@extends('layouts.admin')


@section('content')


    <h1>{{$category->name}}</h1>
    {{--Check to see if there is a rating, if not ask to add one--}}
    @if($ratings->isNotEmpty())

     <table class="table">
         <thead>
           <tr>
             <th>Place</th>
             <th>Score</th>
             {{--This should have another row to view/update the score--}}
           </tr>
         </thead>
         <tbody>
         {{--$scores is an associative array built in route for leaderboard. It consists of place name and the sum of the scores associated with this category and user, grouped by place--}}
         @foreach($scores as $name => $score)
            <tr>
                <td>{{$name}}</td>
                <td>{{$score}}</td>
            </tr>
             @endforeach
         </tbody>
       </table>
    @else
    <div><a href="{{route('rating.show', $category->id)}}/"><button class="btn btn-primary" >Add your first entry</button></a>
    </div>
    @endif


@endsection
