@extends('layout.master')

@section('title')
Users
@endsection

@section('content')

<!-- Users content -->
<div class="ui centered grid add-padding">
  <div class="row">
      <div class="two wide column">
          <button class="ui fluid labeled icon button" onclick="$('.ui.modal.add-user').modal('show')">
            <i class="user icon"></i>
            Add
          </button>
        </div>
        <div class="twelve wide column">
          <div class="ui fluid action input">
            <input type="text" placeholder="Search...">
            <button class="ui labeled icon button">
              <i class="search icon"></i>
              Search
            </button>
          </div>
        </div>
        <div class="fifteen wide column add-padding">
            <table class="ui celled definition table">
              <thead>
                <tr>
                  <th></th>                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Job Title</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="collapsing">
                    <div class="ui small basic icon buttons">
                      <button class="ui button" onclick="$('.ui.modal.edit-user').modal('show')"><i class="edit icon"></i></button>
                      <button class="ui button"><i class="cancel icon"></i></button>
                    </div>
                  </td>
                  <td>John Lilki</td>
                  <td>jhlilk22@yahoo.com</td>
                  <td>Developer</td>
                </tr>
                <tr>
                  <td class="collapsing">
                    <div class="ui small basic icon buttons">
                      <button class="ui button" onclick="$('.ui.modal.edit-user').modal('show')"><i class="edit icon"></i></button>
                      <button class="ui button"><i class="cancel icon"></i></button>
                    </div>
                  </td>
                  <td>Jamie Harington</td>
                  <td>jamieharingonton@yahoo.com</td>
                  <td>Developer</td>
                </tr>
                <tr>
                  <td class="collapsing">
                    <div class="ui small basic icon buttons">
                      <button class="ui button" onclick="$('.ui.modal.edit-user').modal('show')"><i class="edit icon"></i></button>
                      <button class="ui button"><i class="cancel icon"></i></button>
                    </div>
                  </td>
                  <td>Jill Lewis</td>
                  <td>jilsewris22@yahoo.com</td>
                  <td>Tester</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

<!-- Add user modal -->
<div class="ui modal add-user">
  <i class="close icon"></i>
  <div class="header">
    Add User
  </div>
    <div class="content">
      <form class="ui form" action="/user" method="post" id="add-user" enctype="multipart/form-data">
        @csrf
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
          <div class="field">
          <label>Job title</label>
            <input type="text" name="jobtitle">
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
      </form>
    </div>
    <div class="actions">
      <div class="ui red deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive button" onclick="document.getElementById('add-user').submit();">
        Add
      </button>
    </div>
  </div>

  <!-- Edit user modal -->
<div class="ui modal edit-user">
  <i class="close icon"></i>
  <div class="header">
    Edit User
  </div>
    <div class="content">
      <form class="ui form" action="/users" method="post" id="edit-user" enctype="multipart/form-data">
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
          <div class="field">
          <label>Job title</label>
            <input type="text" name="jobtitle">
          </div>         
      </form>
    </div>
    <div class="actions">
      <div class="ui red deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive button" onclick="document.getElementById('edit-user').submit();">
        Save
      </button>
    </div>
  </div>

@endsection
