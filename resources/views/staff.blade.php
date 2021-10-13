@extends('layout.master')

@section('title')
Staff
@endsection

@section('content')

<!-- Staff content -->
<div class="ui centered grid add-padding">
  <div class="row">
      <div class="two wide column">
          <button class="ui fluid labeled icon button" onclick="$('.ui.modal.add-user').modal('show')">
            <i class="user icon"></i>
            Add
          </button>
        </div>
        <div class="twelve wide column">
          <form>
            <div class="ui fluid action input">
              <input type="text" placeholder="Search..." name="search" value="{{$search}}" required>
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
                  $('.ui.modal.add-user').modal('show');
                });
              </script>
            @else
            <div class="ui error message">
              <p>{{$error}}</p>
            </div>
            @endif
          @endisset
            @if (count($users) > 0)
            <table class="ui celled definition table">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Job Title</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td class="collapsing">
                    <div class="ui small basic icon buttons">
                      <button class="ui button" onclick="$('.ui.modal.edit-user-{{$user->id}}').modal('show')"><i class="edit icon"></i></button>
                        <form class="ui" method="post" action="/staff/{{$user->id}}" onsubmit="return confirm('Do you really want to remove {{$user->firstname}} {{$user->lastname}}?');">
                        @csrf
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit" class="ui button"><i class="cancel icon"></i></button>
                      </form>
                    </div>
                  </td>
                  <td>{{$user->firstname}} {{$user->lastname}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->jobtitle}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @elseif ($search == '' && count($users) == 0)
            <div class="ui placeholder segment">
            <div class="ui icon header">
              <i class="user times icon"></i>
              You have not added any users yet!
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
</div>

<!-- Edit user modal -->
@foreach ($users as $user)
  <div class="ui modal edit-user-{{$user->id}}">
    <i class="close icon"></i>
    <div class="header">
      Edit User
    </div>
    <div class="content">
      @isset($error)
        <div class="ui error message">
          <p>{{$error}}</p>
        </div>
      @endisset
      <form class="ui form" action="/staff/{{$user->id}}" method="post" id="edit-user-{{$user->id}}" enctype="multipart/form-data">
        @csrf
        <div class="two fields">
            <div class="field">
              <label>First name</label>
              <input type="text" name="firstname" value="{{$user->firstname}}">
            </div>
            <div class="field">
              <label>Last name</label>
              <input type="text" name="lastname" value="{{$user->lastname}}">
            </div>
          </div>
          <div class="field">
            <label>Job title</label>
            <input type="text" name="jobtitle" value="{{$user->jobtitle}}">
          </div>
        </form>
    </div>
    <div class="actions">
      <div class="ui red deny button">
        Cancel
      </div>
      <button class="ui positive button" onclick="document.getElementById('edit-user-{{$user->id}}').submit();">
        Save
      </button>
    </div>
  </div>
@endforeach

<!-- Add user modal -->
<div class="ui modal add-user">
  <i class="close icon"></i>
  <div class="header">
    Add User
  </div>
    <div class="content">
      @isset($error)
        <div class="ui error message">
          <p>{{$error}}</p>
        </div>
      @endisset
      <form class="ui form" action="/staff" method="post" id="add-user" enctype="multipart/form-data">
        @csrf
        <div class="two fields">
            <div class="field">
              <label>First name</label>
              <input type="text" name="firstname">
            </div>
            <div class="field">
              <label>Last name</label>
              <input type="text" name="lastname">
            </div>
          </div>
          <div class="field">
          <label>Job title</label>
            <input type="text" name="jobtitle">
          </div>
          <div class="field">
          <label>Email</label>
            <input type="text" name="email">
          </div>
          <div class="two fields">
            <div class="field">
              <label>Password</label>
              <input type="password" name="password">
            </div>
            <div class="field">
              <label>Confirm password</label>
              <input type="password" name="confirmpassword">
            </div>
          </div>
      </form>
    </div>
    <div class="actions">
      <div class="ui red deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive button" onclick="document.getElementById('add-user').submit();">
        Add
      </button>
    </div>
  </div>

@endsection
