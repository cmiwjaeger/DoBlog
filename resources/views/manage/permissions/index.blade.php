@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns">
    <div class="column">
      <h1 class="title has-text-light">Manage Permissions</h1>
    </div>
    <div class="column">
      <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><span class="icon"><i class="fa fa-user-plus"></i></span><span> Create New Permission</span></a>
    </div>
  </div>

  <div class="card is-transparent">
    <div class="card-content">
      <table class="table is-striped is-narrow is-fullwidth is-hoverable is-bordered">
        <thead>
          <tr>
            <th class="has-text-centered">ID</th>
            <th class="has-text-centered">Slug (Name)</th>
            <th class="has-text-centered">Description</th>
            <th ></th>
          </tr>
        </thead>

        <tbody>
          @foreach ($permissions as $permission)
          <tr>
            <th class="has-text-centered">{{$permission->id}}</th>
            <td>{{$permission->name}}</td>
            <td>{{$permission->display_name}}</td>
            <td>{{$permission->description}}</td>
            <td class="has-text-centered"><a class="button is-small is-info is-inverted is-outlined m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="button is-small is-link is-inverted is-outlined" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$permissions->links()}}
    </div>
  </div> <!-- end of .card -->

  
</div>
@endsection
