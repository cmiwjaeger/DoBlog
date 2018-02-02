@extends('layouts.manage')

@section('content')
<div class="flex-container ">
  <div class="columns ">
    <div class="column">
      <h1 class="title">{{$user->name}}</h1>
      <h4 class="subtitle">View User Details</h4>
    </div>
    <div class="column">
      <a href="{{route('users.edit', $user->id)}}" class="button is-info is-pulled-right"><span class="icon"><i class="fa fa-user"></i></span><span> Edit This User</span></a>
    </div>
  </div>

  <div class="culumns">
    <div class="column">
      <div class="field">
        <label for="name" class="label">Name</label>
        <pre>{{$user->name}}</pre>
      </div>
      <div class="field">
        <label for="email" class="label">Email</label>
        <pre>{{$user->email}}</pre>
      </div>
    </div>
  </div>
</div> <!-- end of .flex-container -->
@endsection