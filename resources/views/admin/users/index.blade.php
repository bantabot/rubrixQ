@extends('layouts.admin')

@section('content')

    @if($users)
         <table class="table">
             <thead>
               <tr>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Role</th>
                   <th>Created</th>
                   <th>Edit</th>
               </tr>
             </thead>
             <tbody>
             @foreach($users as $user)
               <tr>
                 <td>{{$user->name}}</td>
                 <td>{{$user->role->name}}</td>
                 <td>{{$user->email}}</td>
                   <td>{{$user->created_at->diffForHumans()}}</td>
                   <td><a href="{{route('users.edit', $user->id)}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
               </tr>
                 @endforeach

             </tbody>
           </table>




    @endif




    @endsection
