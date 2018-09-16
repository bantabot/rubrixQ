
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
        <tr>
            <td>Bone lick</td>
            <td>82</td>
            <td>a month ago</td>
            <td class="btn btn-primary"> Edit </td>
        </tr>

        </tbody>
    </table>

@endsection

