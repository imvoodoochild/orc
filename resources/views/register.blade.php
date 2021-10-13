@extends('layout.landing')

@section('title')
Register
@endsection

@section('content')

<!-- register content -->
<div class="ui secondary pointing menu remove-margin">
    <div class="header item">
      <img src = "images\logo.svg" alt="Logo SVG"/>
    </div>
    <div class="right menu">
    <a class="item" href="/home">Home</a>
  </div>
</div>

<div class="ui grid" style="padding-top: 50px;">
  <div class="row">
    <div class="five wide column"></div>
    <div class="six wide column">
      <form class="ui large form" action="/register" method="post">
        @csrf
        <div class="ui stacked segment">
          <h2 class="ui dividing header centered">
            Register to Orc
          </h2>
          <div class="two fields">
            <div class="field">
              <label>First name</label>
              <input type="text" name="firstname" required>
            </div>
            <div class="field">
              <label>Last name</label>
              <input type="text" name="lastname">
            </div>
          </div>
          <div class="two fields">
            <div class="field">
              <label>Workplace</label>
              <input type="text" name="workplace" required>
            </div>
            <div class="field">
              <label>Job title</label>
              <input type="text" name="jobtitle" required>
            </div>
          </div>
          <div class="field">
          <label>Email</label>
            <input type="text" name="email" required>
          </div>
          <div class="two fields">
            <div class="field">
              <label>Password</label>
              <input type="password" name="password" required>
            </div>
            <div class="field">
              <label>Confirm password</label>
              <input type="password" name="confirmpassword" required>
            </div>
          </div>
          <button type="submit" class="ui button fluid" tabindex="0">Register</button>
        </div>
      </form>
      <div class="ui message center-text">
        Already have an account? <a href="login">Login</a>
      </div>
      @isset($error)
      <div class="ui tiny error message">
        <p>{{$error}}</p>
      </div>
      @endisset
    </div>
  </div>
</div>
@endsection
