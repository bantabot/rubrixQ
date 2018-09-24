@extends('layouts.admin')


@section('content')

    <h1>{{$category->name}}</h1>

    @if($ratings->isNotEmpty())

     <table class="table">
         <thead>
           <tr>
             <th>Place</th>
             <th>Score</th>
             <th>Date</th>
           </tr>
         </thead>
         <tbody>
         @foreach($ratings as $rating)
           <tr>
             <td>{{$rating->place->name}}</td>
             <td>{{$rating->getPlaceSum($category->id, $rating->place->id)}}</td>
             <td>{{$rating->updated_at->diffForhumans()}}</td>
           </tr>
             @endforeach

         </tbody>
       </table>
    @else
    <div><a href="{{route('rating.show', $category->id)}}/"><button class="btn btn-primary" >Add your first entry</button></a>
    </div>
    @endif


@endsection
