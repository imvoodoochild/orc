@extends('layout.master')

@section('title')
Register
@endsection

@section('content')

<!-- register content -->
<div class="ui grid top-margin">
  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column">      
      <form class="ui large form">
        <div class="ui stacked segment">
          <h2 class="ui dividing header centered">
            Registration
          </h2>
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
          <div class="two fields">
            <div class="field">
              <label>Workplace</label>
              <input type="text" name="workplace">
            </div>
            <div class="field">
              <label>Job title</label>
              <input type="text" name="jobtitle">
            </div> 
          </div>          
          <div class="field">
          <label>Username</label>
            <input type="text" name="username">
          </div>
          <div class="field">
            <label>Password</label>
            <input type="password">
          </div>
          <div class="field">
            <label>Confirm password</label>
            <input type="password">
          </div>
          <div class="ui button fluid" tabindex="0">Register</div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection