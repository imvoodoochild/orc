@extends('layout.master')

@section('title')
Settings
@endsection

@section('content')

<!-- Settings content -->
<div class="ui sixteen column grid full-height">
    <div class="three wide column user-panel add-padding">
      <div class="ui fluid secondary vertical pointing menu">
        <a class="active item">
          Account Settings
        </a>
        <a class="item">
          User Settings
        </a>
      </div>
    </div>
    <div class="thirteen wide column">
      <div class="ui grid">
        <div class="three column row">
          <div class="column">
            
          </div>
          <div class="column">
            <form class="ui form">
            <h4 class="ui dividing header">Change Password</h4>
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
              <div class="ui button" tabindex="0">Submit</div>
            </form>
          </div>
          <div class="column">
            
        </div>
        </div>
      </div>
    </div>
</div>

@endsection