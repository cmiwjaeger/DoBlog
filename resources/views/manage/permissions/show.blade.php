@extends('layouts.manage')

@section('content')
<div class="flex-container ">
  <div class="columns ">
    <div class="column">
      <h1 class="title">{{$permission->name}}</h1>
      <h4 class="subtitle">View Permission Details</h4>
    </div>
    <div class="column">
      <a href="{{route('permissions.edit', $permission->id)}}" class="button is-info is-pulled-right"><span class="icon"><i class="fa fa-user"></i></span><span> Edit This Permission</span></a>
    </div>
  </div>

  <div class="columns">
    <div class="column">
      <div class="box">
        <article class="media">
          <div class="media-content">
            <div class="content">
              <p>
                <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                <br>
                {{$permission->description}}
              </p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div> <!-- end of .flex-container -->
@endsection