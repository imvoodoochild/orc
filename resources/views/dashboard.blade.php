@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Dashboard layout -->
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
          <button class="ui labeled icon button" onclick="$('.ui.modal.add-project').modal('show')">
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
          <table class="ui table">
            <thead>
              <tr><th class="six wide">Projects</th>
              <th class="six wide">Status</th>
              <th class="four wide"></th>
            </tr></thead>
            <tbody>
              <tr>
                <td>Project1</td>
                <td>Stopped</td>
                <td class="right aligned">
                  <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                  <div class="ui button">Build</div>
                </td>
              </tr>
              <tr>
                <td>Project2</td>
                <td>Stopped</td>
                <td class="right aligned">
                  <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                  <div class="ui button">Build</div>
                </td>
              </tr>
              <tr>
                <td>Project3</td>
                <td>Stopped</td>
                <td class="right aligned">
                  <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                  <div class="ui button">Build</div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<!-- Add project modal -->
<div class="ui modal add-project">
  <i class="close icon"></i>
  <div class="header">
    Add Project
  </div>
    <div class="content">
      <form class="ui form" action="/project" method="post" id="add-project" enctype="multipart/form-data">
        <div class="field">
          <label>Project title</label>
          <input type="text" name="title">
        </div>
        <div class="field">
          <label>Build type</label>
          <input type="text" name="type">
        </div>
        <div class="field">
          <label>Git repository link</label>
          <input type="text" name="link">
        </div>
        <div class="field">
          <label>Project branch</label>
          <input type="text" name="branch">
        </div>
         <div class="field">
          <label>Domain name</label>
          <input type="text" name="name">
        </div>
         <div class="field">
          <label>SSH key</label>
          <input type="text" name="key">
        </div>
      </form>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive right labeled icon button" onclick="document.getElementById('add-project').submit();">
        Add
        <i class="checkmark icon"></i>
      </button>
    </div>

    <!-- Edit project modal -->
    <div class="ui modal edit-project">
  <i class="close icon"></i>
  <div class="header">
    Edit Project
  </div>
    <div class="content">
      <form class="ui form" action="/project" method="post" id="edit-project" enctype="multipart/form-data">
        <div class="field">
          <label>Project title</label>
          <input type="text" name="title">
        </div>
        <div class="field">
          <label>Build type</label>
          <input type="text" name="type">
        </div>
        <div class="field">
          <label>Git repository link</label>
          <input type="text" name="link">
        </div>
        <div class="field">
          <label>Project branch</label>
          <input type="text" name="branch">
        </div>
         <div class="field">
          <label>Domain name</label>
          <input type="text" name="name">
        </div>
         <div class="field">
          <label>SSH key</label>
          <input type="text" name="key">
        </div>
      </form>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive right labeled icon button" onclick="document.getElementById('edit-project').submit();">
        Save
        <i class="checkmark icon"></i>
      </button>
    </div>

</div>

@endsection