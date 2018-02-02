@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns">
    <div class="column">
      <h1 class="title has-text-light">Manage Users</h1>
    </div>
    <div class="column">
      <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><span class="icon"><i class="fa fa-user-plus"></i></span><span> Create New User</span></a>
    </div>
  </div>

  <div class="card is-transparent">
    <div class="card-content">
      <table class="table is-striped is-narrow is-fullwidth is-hoverable is-bordered">
        <thead>
          <tr>
            <th class="has-text-centered">ID</th>
            <th class="has-text-centered">Name</th>
            <th class="has-text-centered">Email</th>
            <th class="has-text-centered">Date Created</th>
            <th ></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($users as $user)
          <tr>
            <th class="has-text-centered">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->toFormattedDateString()}}</td>
            <td class="has-text-centered"><a class="button is-small is-info is-inverted is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a><a class="button is-small is-link is-inverted is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$users->links()}}
    </div>
  </div> <!-- end of .card -->

  
</div>
@endsection
