@extends('layouts.admin')

@section('content')

    {{--@if($users)--}}
        {{--<h1> Welcome {{$users->name}}</h1>--}}
        {{--@endif--}}


     <table class="table">
          <tbody>
           <tr>
             <td>Create New Rubrix</td>
             <td class="btn btn-primary">New Rubrix</td>

           </tr>

         </tbody>
       </table>

   {{--}}
   @if($categories)
   {{--}}

    <h1>Your Rubrix</h1>

 <table class="table">
     <thead>
       <tr>
         <th>Rubrix</th>
         <th>Created</th>
         <th>Entries</th>
       </tr>
     </thead>
     <tbody>
     {{-- example data--}}
       <tr>
         <td>BBQ</td>
         <td>a month ago</td>
         <td>12</td>
           <td class="btn btn-primary"> Add new </td>

           <td class="btn btn-danger"> <a href="leaderboard"> View all</a> </td>
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

