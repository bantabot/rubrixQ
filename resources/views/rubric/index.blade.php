
@extends('layouts.admin')

@section('content')

    {{--}}
    Leaderboard for specific rubrix
    This example has what it will look like for BBQ
    {{--}}

    <h1>BBQ Leaderboard</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Place</th>
            <th>Score</th>
            <th>Visited at </th>
        </tr>
        </thead>
        <tbody>
        {{-- example data--}}
        @foreach($rubrics as $rubric)
        <tr>
            <td>{{$rubric->place}}</td>
            <td>{{$rubric->toast + $rubric->presentation + $rubric->booty_factor + $rubric->tenderness + $rubric->smokiness + $rubric->sauce + $rubric->portion_size + $rubric->slaw + $rubric->meat_sauce_combo + $rubric->value + $rubric->go_back + $rubric->recommend + $rubric->sides + $rubric->brunswick_stew + $rubric->pickles + $rubric->service + $rubric->dessert + $rubric->ambiance + $rubric->bonus}}</td>
            <td>{{$rubric->updated_at->diffForHumans()}}</td>
            <td> <a href="{{route('rubric.edit', $rubric->id)}}"><button type="button" class="btn btn-primary">Edit</button></a> </td>
        </tr>
            @endforeach

        </tbody>
    </table>

@endsection

