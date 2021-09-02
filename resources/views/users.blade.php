@extends('layout.master')

@section('title')
Settings
@endsection

@section('content')

<!-- Settings content -->
<div class="ui sixteen column grid full-height">
    <div class="ui visible sidebar inverted vertical menu">
        <div class="item">
            <div class="menu">
                <a class="item" href="/settings/account">
                    Account Settings
                </a>
                <a class="active item" href="/settings/users">
                    User Settings
                </a>
            </div>
        </div>
    </div>
    <div class="three wide column"></div>
    <div class="ten wide column">
      <div class="ui grid">
        <div class="three column row">
          <div class="column">
          </div>
          <div class="column">
            
          </div>
          <div class="column">

        </div>
        </div>
      </div>
    </div>
</div>

@endsection
