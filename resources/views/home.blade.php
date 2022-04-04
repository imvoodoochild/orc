<!--
Programmer name: Ms. Mariyam Malika Asim, TP056480, BSc. (Hons) in Computer Science, Asia Pacific University (APU), Technology Park Malaysia
Program name: home.blade.php
Description: To provide the contents for home page in website.
First written on: 28/07/2021
Edited on: 13/10/2021
-->

@extends('layout.landing')

@section('title')
Home
@endsection

@section('content')

<!-- Home content -->
<div class="pusher">
  <div class="ui vertical masthead center aligned segment home-header">

    <div class="ui container">
      <div class="ui large secondary pointing menu remove-border">
          <div class="header item">
            <img src = "images\logo.svg" alt="Logo SVG"/>
          </div>
        <div class="right item">
          <a class="ui inverted button" href="/login">Login</a>
        </div>
      </div>
    </div>

    <div class="ui text container add-padding">
      <h1 class="ui inverted header">
        Welcome to Orc
      </h1>
      <h2 class="ui inverted header">An Automated Software Deployment Tool</h2>
      <a class="ui huge positive button" href="/register">Get Started <i class="right arrow icon"></i></a>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui center aligned stackable container">
      <div class="row add-padding">
        <div class="ui text container">
        <h3 class="ui horizontal divider header">
        About Orc
      </h3>
      <p>Development teams set out to push new software versions continuously into production. Developers have relied deeply on version control systems such as Git for constant software deliveries. However, Git involves a lot of steps for a single deployment. Even if developers document the entire process, there is the risk of skipping a step or incorrect execution of software, leading to an error-prone and time-consuming task. Orc utilizes both Git and containers that can send builds to deployment in a single step, providing a faster and consistent deployment workflow with greater results.</p>
      <h3 class="ui horizontal divider header">
        For Development Teams
      </h3>
      <p>The target users involved in utilizing the website are development teams having at least developers or DevOps practitioners as these groups can greatly benefit from Orc. In development teams, the head of development will be using an admin account and create staff accounts for others.</p>
    </div>
      </div>
    </div>
  </div>

</div>

@endsection
