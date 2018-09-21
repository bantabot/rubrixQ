@extends('layouts.admin')

@section('content')





{{--{{$ratings->name}}--}}



    <table class="table">
        <thead>
        <tr>
            <th>Place</th>
            <th>Category</th>
            <th>Score</th>

        </tr>
        </thead>
        <tbody>
{{--        @foreach($test as $value)--}}
        @foreach($places as $place)
            <tr>
                <td>{{$place->place->name}}</td>
{{--                <td>{{$ratings->rubric()->category->name}}</td>--}}
                <td>{{$place->score}} </td>
                <td>{{$ratings->getPlaceSum($place->place->id)}}</td>
{{--               <td>{{$places->rubric->category->name}}</td>--}}

{{--                <td>{{$rating->rubric->factor->name}}</td>--}}
                {{--<td>{{$rating->score}}</td>--}}


            </tr>
        @endforeach

        {{--@foreach($test as $value)--}}
            {{--<tr>--}}
                {{--<td>{{$value->category->name}}</td>--}}
            {{--</tr>--}}

        {{--@endforeach--}}

{{--        {{var_dump($test->category()->name)}}--}}






        </tbody>
    </table>


@endsection
