@extends('layout.landing')

@section('title')
Login
@endsection

@section('content')

<!-- Login content -->
<div class="ui secondary pointing menu remove-margin">
    <div class="header item">
      <img src = "images\logo.svg" alt="Logo SVG"/>
    </div>
    <div class="right menu">
    <a class="item" href="/home">Home</a>
  </div>
</div>

<div class="ui center aligned grid top-margin">
  <div class="row">
    <div class="column center-column">
      <form class="ui large form" action="/login" method="post">
        @csrf
        <div class="ui segment">
          <h1 class="ui dividing header centered">
            Log-in to Orc
          </h1>
          <div class="field">
            <div class="ui left icon input">
              <i class="mail icon"></i>
              <input type="text" name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password" required>
            </div>
          </div>
          <button type="submit" class="ui large submit button fluid" tabindex="0">Login</button>
        </div>
      </form>
      <div class="ui message">
        New to Orc? <a href="register">Register</a>
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
