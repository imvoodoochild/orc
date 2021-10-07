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
        <form method='get' action='/dashboard'>
          <div class="ui fluid action input">
            <input type="text" placeholder="Search..." name="search" value="{{$search}}">
            <button class="ui labeled icon button">
              <i class="search icon"></i>
              Search
            </button>
          </div>
        </form> 
      </div>
      <div class="fifteen wide column add-padding">
        @isset($error)
          @if ($error == 'Invalid input, please try again!')
            <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", function(){
                $('.ui.modal.add-project').modal('show');
              });
            </script>
          @else
          <div class="ui error message">
            <p>{{$error}}</p>
          </div>
          @endif
        @endisset
        @if (count($projects) > 0)
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
        @elseif ($search == '' && count($projects) == 0)
          <div class="ui placeholder segment">
          <div class="ui icon header">
            You haven't added any projects yet!
          </div>
        </div>
        @else
        <div class="ui placeholder segment">
          <div class="ui icon header">
            <i class="search icon"></i>
            Sorry, no such results found for {{$search}}
          </div>
        </div>

        @endif
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
      @isset($error)
        <div class="ui error message">
          <p>{{$error}}</p>
        </div>
      @endisset

      <form class="ui form" action="/dashboard" method="post" id="add-project" enctype="multipart/form-data">
        @csrf
        <div class="field">
          <label>Project title</label>
          <input type="text" name="title" required>
        </div>
        <div class="field">
          <label>Build type</label>
          <input type="text" name="build" required>
        </div>
        <div class="field">
          <label>Git repository link</label>
          <input type="text" name="link" required>
        </div>
        <div class="field">
          <label>Project branch</label>
          <input type="text" name="branch" required>
        </div>
         <div class="field">
          <label>Port number</label>
          <input type="number" name="port" min="1024" max="49151" required>
        </div>
         <div class="field">
          <label>SSH key</label>
          <input type="text" name="key" required>
        </div>
      </form>
    </div>
    <div class="actions">
      <div class="ui negative button">
        Cancel
      </div>
      <button type="submit" class="ui positive button" onclick="document.getElementById('add-project').submit();">
        Add
      </button>
    </div>
  </div>

@endsection
