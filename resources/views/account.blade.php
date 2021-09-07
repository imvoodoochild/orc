@extends('layout.master')

@section('title')
Account
@endsection

@section('content')

<!-- Account content -->
<div class="ui grid add-padding">
  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column">
      <h2 class="ui center aligned icon header">
        <i class="circular user icon"></i>
        Name
      </h2>
      <div class="ui fluid card">
        <div class="content">
          <div class="header">Job Title</div>
          <div class="meta">Workplace</div>
          <div class="description">
            Email
          </div>
        </div>
        <div class="ui medium bottom attached button" tabindex="0" onclick="$('.ui.modal.edit-profile').modal('show')">Edit</div>
      </div>
    </div>
    <div class="five wide column"></div>
  </div>
  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column">
      <form class="ui large form">
        <h3 class="ui dividing header centered">
        Change Password
        </h3>
        <div class="field">
          <label>Old password</label>
          <input type="password">
        </div>
        <div class="field">
          <label>New password</label>
          <input type="password">
        </div>
        <div class="field">
          <label>Confirm password</label>
          <input type="password">
        </div>
        <div class="ui fluid button" tabindex="0">Submit</div>
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
    <form class="ui form" action="/profile" method="post" id="edit-profile" enctype="multipart/form-data">
      <div class="field">
        <label>First Name</label>
        <input type="text" name="title">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="type">
      </div>
      <div class="field">
        <label>Job Title</label>
        <input type="text" name="link">
      </div>
    </form>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
      <button type="submit" class="ui positive button" onclick="document.getElementById('add-project').submit();">
        Save
      </button>
    </div>
  </div>


@endsection
