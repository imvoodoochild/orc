@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="ui sixteen column grid full-height">
    <div class="four wide column user-panel add-padding">
      <div class="ui fluid card">
        <div class="content">
          <div class="header">User</div>
          <div class="meta">Username</div>
          <div class="description">
            Developer
          </div>
        </div>
      </div>
    </div>

    <div class="twelve wide column">
      <div class="ui centered grid">
        <div class="two wide column">
          <button class="ui labeled icon button">
            <i class="plus icon"></i>
            Add
          </button>
        </div>
        <div class="thirteen wide column">
          <div class="ui fluid action input">
            <input type="text" placeholder="Search...">
            <button class="ui labeled icon button">
              <i class="search icon"></i>
              Search
            </button>
          </div>
        </div>
        <div class="fifteen wide column">
          <h3>Projects</h3>
          <div class="ui middle aligned divided list list-border">
            <div class="item">
              <div class="right floated content">
                <div class="ui button">Edit</div>
                <div class="ui button">Build</div>
              </div>
              <div class="content">
                Project1
              </div>
            </div>
            <div class="item">
              <div class="right floated content">
                <div class="ui button">Edit</div>
                <div class="ui button">Build</div>
              </div>
              <div class="content">
                Project2
              </div>
            </div>
            <div class="item">
              <div class="right floated content">
                <div class="ui button">Edit</div>
                <div class="ui button">Build</div>
              </div>
              <div class="content">
                Project3
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection