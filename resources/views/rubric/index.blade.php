
@extends('layouts.admin')

@section('content')

{{--    {{dd($rubrics)}}--}}



    <h1>Your Rubrix</h1>

     <table class="table">
         <thead>
           <tr>
             <th>Name</th>
             <th>Description</th>

           </tr>
         </thead>
         <tbody>
         @foreach($rubrics as $rubric)
           <tr>
             <td>{{$rubric->category->name}}</td>
             <td>{{$rubric->category->description}}</td>
             <td><a href="{{route('rubric.show', $rubric->category->id)}}/"><button class="btn btn-primary" >Edit Factors</button></a></td>
               <td><a href="{{route('rating.show', $rubric->category->id)}}/"><button class="btn btn-primary" >Add Score</button></a></td>



           </tr>
           @endforeach

         </tbody>
       </table>

    {{--}}
    Leaderboard for specific rubrix
    This example has what it will look like for BBQ
    {{--}}

    {{--<h1>BBQ Leaderboard</h1>--}}

    {{--<table class="table">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th>Place</th>--}}
            {{--<th>Score</th>--}}
            {{--<th>Visited at </th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{-- example data--}}
        {{--@foreach($rubrics as $rubric)--}}
        {{--<tr>--}}
            {{--<td><a target="_blank" href="http://www.google.com/search?q={{urlencode(strtolower($rubric->place))}}">{{$rubric->place}}</a></td>--}}
            {{--<td>{{$rubric->toast + $rubric->presentation + $rubric->booty_factor + $rubric->tenderness + $rubric->smokiness + $rubric->sauce + $rubric->portion_size + $rubric->slaw + $rubric->meat_sauce_combo + $rubric->value + $rubric->go_back + $rubric->recommend + $rubric->sides + $rubric->brunswick_stew + $rubric->pickles + $rubric->service + $rubric->dessert + $rubric->ambiance + $rubric->bonus}}</td>--}}
            {{--<td>{{$rubric->updated_at->diffForHumans()}}</td>--}}
            {{--<td> <a href="{{route('rubric.edit', $rubric->id)}}"><button type="button" class="btn btn-primary">Edit</button></a> </td>--}}
        {{--</tr>--}}
            {{--@endforeach--}}

        {{--</tbody>--}}
    {{--</table>--}}

@endsection

