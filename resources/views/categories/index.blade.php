@extends('layouts.admin')

@section('content')

    {{--@if($users)--}}
    {{--<h1> Welcome {{$users->name}}</h1>--}}
    {{--@endif--}}


    {{--<table class="table">--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td>Create New Rubrix</td>--}}
    {{--<td><a href="create"><button type="button" class="btn btn-primary">New</button></a></td>--}}

    {{--</tr>--}}

    {{--</tbody>--}}
    {{--</table>--}}

    {{--}}
    @if($categories)
    {{--}}

    <h1>Your Rubrix</h1>

   <div><a href="{{route('category.create')}}"><button type="button" class="btn btn-primary">New Category</button></a></div>

    <table class="table">
        <thead>
        <tr>
            <th>Rubrix</th>
            <th>Description</th>
            <th>Created</th>
            <th>Entries</th>
        </tr>
        </thead>
        <tbody>
        {{-- example data--}}
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->description}}</td>
                <td>{{$category->created_at->diffForHumans()}}</td>
                <td>{{DB::table('rubrics')->where('category_id', $category->id)->count()}}</td>
                <td><a href="{{route('rubric.create')}}"><button type="button" class="btn btn-primary">New Entry</button></a></td>


                <td><a href="{{route('rubric.index')}}"><button type="button" class="btn btn-danger">View All</button></a></td>
                <td><a href="{{route('category.edit', $category->id)}}"><button type="button" class="btn btn-danger">Edit Category</button></a></td>
                @endforeach

            </tr>
            {{--possible foreach}}
            @foreach($categories as $category)
              <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at->diffForHumans()}}</td>
                <td>This needs to query to find out how many rubrix this user has in this category</td>
              </tr>
          {{--}}
        </tbody>
    </table>

@endsection

