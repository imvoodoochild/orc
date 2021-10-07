@extends('layout.master')

@section('title')
Profile
@endsection

@section('content')

<!-- Profile content -->
<div class="ui grid add-padding">

  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column">
      <div class="ui fluid card">
        <div class="content">
          <h3 class="ui icon header">
            <i class="small user circle icon"></i>
            {{$user->firstname}} {{$user->lastname}}
          </h3>
          <div class="ui divider"></div>
          <div class="header">{{$user->jobtitle}}</div>
          <div class="meta">{{$user->workplace}}</div>
          <div class="description">
            {{$user->email}}
          </div>
        </div>
        <div class="tiny ui bottom attached secondary button" tabindex="0" onclick="$('.ui.modal.edit-profile').modal('show')">Edit</div>
      </div>
    </div>
    <div class="five wide column"></div>
  </div>

  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column">
        @isset($error)
        <div class="ui negative message">
          <p>{{$error}}</p>
        </div>
        @endisset
        @isset($success)
            <div class="ui positive message">
                <p>{{$success}}</p>
            </div>
        @endisset

      <form class="ui small form" action="/profile/password" method="post">
        @csrf
        <h3 class="ui dividing header centered">
        Change Password
        </h3>
        <div class="field">
          <label>Old password</label>
          <input type="password" name="oldpassword" required>
        </div>
        <div class="field">
          <label>New password</label>
          <input type="password" name="newpassword" required>
        </div>
        <div class="field">
          <label>Confirm password</label>
          <input type="password" name="confirmpassword" required>
        </div>
        <button type="submit" class="tiny ui fluid primary button" tabindex="0">Update</button>
      </form>
    </div>
  </div>

</div>

<!-- Edit profile modal -->
  <div class="ui modal edit-profile">
  <i class="close icon"></i>
  <div class="header">
    Edit Profile
  </div>
  <div class="content">
    <form class="ui form" action="/profile/{{$user->id}}" method="post" id="edit-profile" enctype="multipart/form-data">
      @csrf
      <div class="field">
        <label>First Name</label>
        <input type="text" name="firstname" value="{{$user->firstname}}"/>
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="lastname" value="{{$user->lastname}}"/>
      </div>
      <div class="field">
        <label>Job Title</label>
        <input type="text" name="jobtitle" value="{{$user->jobtitle}}"/>
      </div>
    </form>
  </div>
  <div class="actions">
    <div class="ui negative deny button">
      Cancel
    </div>
      <button type="submit" class="ui positive button" onclick="document.getElementById('edit-profile').submit();">
        Save
      </button>
    </div>
  </div>


@endsection
