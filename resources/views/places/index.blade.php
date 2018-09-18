@extends('layouts.admin')

@section('content')

     <h1>Places</h1>

    <div><a href="{{route('place.create')}}"><button type="button" class="btn btn-primary">New Place</button></a></div>

    <table class="table">
        <thead>
        <tr>
            <th>Place</th>
            <th>City</th>
            <th>Created</th>

        </tr>
        </thead>
        <tbody>
        {{-- example data--}}
        @foreach($places as $place)
            <tr>
                <td>{{$place->name}}</td>
                <td>{{$place->city}}</td>
                <td>{{$place->created_at->diffForHumans()}}</td>
                <td><a href="{{route('place.edit', $place->id)}}"><button type="button" class="btn btn-danger">Edit Place</button></a></td>
                @endforeach

            </tr>

        </tbody>
    </table>

@endsection

