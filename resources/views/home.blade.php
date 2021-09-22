@extends('layout.master')

@section('title')
Home
@endsection

@section('content')

<!-- Home content -->
<div class="ui center aligned grid top-margin">
  <div class="row">
    <div class="pusher">
  <div class="ui vertical masthead center aligned segment">
    <div class="ui text container">
      <h1 class="ui header">
        Welcome to Orc
      </h1>
    </div>
  </div>


    <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">About Orc</h3>
          <p>Orc helps developers and companies to </p>
          <h3 class="ui header">We Make Bananas That Can Dance</h3>
          <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
        </div>
        <div class="six wide right floated column">
          <img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">
        </div>
      </div>
      <div class="row">
        <div class="center aligned column">
          <button class="ui huge primary button">Get Started <i class="right arrow icon"></i></button>
        </div>
      </div>
    </div>
  </div>

</div>
  </div>
</div>
@endsection
