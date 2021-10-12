@extends('layout.master')

@section('title')
Edit Project
@endsection

@section('content')

<!-- Edit project content -->
<div class="ui grid">
  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column add-padding">
      <form class="ui large form" action="/project/{{$project->id}}" method="post">
        @csrf
        <div class="ui stacked segment">
          <h2 class="ui dividing header centered">
            Edit Project
          </h2>
          <div class="field">
            <label>Project title</label>
            <input type="text" name="title" value="{{$project->title}}" required>
          </div>
          <div class="field">
            <label>Build type</label>
            <input type="text" name="build" value="{{$project->build}}" required>
          </div>
          <div class="field">
            <label>Git repository link</label>
            <input type="text" name="link" value="{{$project->link}}" required>
          </div>
          <div class="field">
            <label>Project branch</label>
            <input type="text" name="branch" value="{{$project->branch}}" required>
          </div>
          <div class="field">
            <label>Port number</label>
            <input type="number" name="port" min="1" value="{{$project->port}}" required>
          </div>
          <button type="submit" class="ui primary button fluid" tabindex="0">Update</button>
        </div>
      </form>
        @isset($error)
          <div class="ui tiny error message">
            <p>{{$error}}</p>
          </div>
        @endisset
    </div>
  </div>
</div>
@endsection
