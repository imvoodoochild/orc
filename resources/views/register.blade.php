@extends('layout.landing')

@section('title')
Register
@endsection

@section('content')

<!-- register content -->
<div class="ui secondary pointing menu remove-margin">
    <div class="header item">
      Orc
    </div>
    <div class="right menu">
    <a class="item" href="/">Home</a>
  </div>
</div>

<div class="ui grid top-margin">
  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column add-padding">      
      <form class="ui large form" action="/register" method="post">
        @csrf
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
          <button type="submit" class="ui button fluid" tabindex="0">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection