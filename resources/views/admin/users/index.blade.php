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
               </tr>
             </thead>
             <tbody>
             @foreach($users as $user)
               <tr>
                 <td>{{$user->name}}</td>
                 <td>{{$user->role->name}}</td>
                 <td>{{$user->email}}</td>
                   <td>{{$user->created_at->diffForHumans()}}</td>
               </tr>
                 @endforeach

             </tbody>
           </table>




    @endif




    @endsection
