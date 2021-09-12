@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Dashboard content -->
<div class="ui centered grid add-padding">
  <div class="row">
    <div class="two wide column">
        <div class="two wide column">
          <button class="ui fluid labeled icon button" onclick="$('.ui.modal.add-project').modal('show')">
            <i class="plus icon"></i>
            Add
          </button>
        </div>
    </div>
      <div class="twelve wide column">
        <div class="ui fluid action input">
          <input type="text" placeholder="Search...">
          <button class="ui labeled icon button">
            <i class="search icon"></i>
            Search
          </button>
        </div>
      </div>
      <div class="fifteen wide column add-padding">
        <table class="ui compact table">
          <thead>
            <tr><th class="six wide">Projects</th>
            <th class="six wide">Status</th>
            <th class="four wide"></th>
          </tr></thead>
          <tbody>
            @foreach ($projects as $project)
              <tr>
                <td>{{$project->title}}</td>
                <td class="negative">{{$project->status}}</td>
                <td class="right aligned">
                  <a href="/project/{{$project->id}}" class="ui primary button">Edit</a>
                  <div class="ui buttons">
                    <form class="ui" method="post" action="/project/{{$project->id}}" onsubmit="return confirm('Do you really want to remove the project: {{$project->title}}?');">
                      @csrf
                      <input type="hidden" name="_method" value="delete" />
                      <button type="submit" class="ui secondary button">Remove</button>
                    </form>
                  </div>
                  <div class="ui buttons">
                    <button class="ui negative button">Stop</button>
                    <div class="or"></div>
                    <button class="ui positive button">Run</button>
                  </div>
                </td>
              </tr>
            @endforeach          
            
          </tbody>
        </table>
      </div>
  </div>
</div>

<!-- Add project modal -->
<div class="ui modal add-project">
  <i class="close icon"></i>
  <div class="header">
    Add Project
  </div>
    <div class="content">
      <form class="ui form" action="/dashboard" method="post" id="add-project" enctype="multipart/form-data">
        @csrf
        <div class="field">
          <label>Project title</label>
          <input type="text" name="title">
        </div>
        <div class="field">
          <label>Build type</label>
          <input type="text" name="build">
        </div>
        <div class="field">
          <label>Git repository link</label>
          <input type="text" name="link">
        </div>
        <div class="field">
          <label>Project branch</label>
          <input type="text" name="branch">
        </div>
         <div class="field">
          <label>Domain name</label>
          <input type="text" name="domain">
        </div>
         <div class="field">
          <label>SSH key</label>
          <input type="text" name="key">
        </div>
      </form>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive right labeled icon button" onclick="document.getElementById('add-project').submit();">
        Add
        <i class="checkmark icon"></i>
      </button>
    </div>
  </div>

@endsection
