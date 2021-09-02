@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Dashboard content -->
<div class="ui grid">
  <div class="row">
    <div class="three wide column user-panel add-padding">
      <h2 class="ui center aligned icon header">
        <i class="circular user icon"></i>
        Username
      </h2>
      <div class="ui fluid card">
        <div class="content">
          <div class="header">Name</div>
          <div class="meta">Developer</div>
          <div class="description">
            Bank
          </div>
        </div>
        <div class="ui bottom attached button" tabindex="0" onclick="$('.ui.modal.edit-profile').modal('show')">Edit</div>
      </div>
    </div>

    <div class="thirteen wide column add-padding">
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
                <td class="negative">Stopped</td>
                <td class="right aligned">
                  <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                  <div class="ui button">Run</div>
                </td>
              </tr>
              <tr>
                <td>Project2</td>
                <td class="positive">Running</td>
                <td class="right aligned">
                  <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                  <div class="ui button">Run</div>
                </td>
              </tr>
              <tr>
                <td>Project3</td>
                <td class="negative">Stopped</td>
                <td class="right aligned">
                  <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                  <div class="ui button">Run</div>
                </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr><tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr><tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr><tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr><tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr><tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
              <tr>
                  <td>Project3</td>
                  <td class="negative">Stopped</td>
                  <td class="right aligned">
                      <div class="ui button" onclick="$('.ui.modal.edit-project').modal('show')">Edit</div>
                      <div class="ui button">Run</div>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
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
        <form class="ui form" action="/edit" method="post" id="edit-project" enctype="multipart/form-data">
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
        <!-- <div class="ui divider"></div>
        <div class="ui bottom attached button" tabindex="0">Stop Project</div> -->
        <div class="ui divider"></div>
        <div class="negative ui bottom attached button" tabindex="0">Remove Project</div>
      </div>
    </div>
  </div>

    <!-- Edit profile modal -->
    <div class="ui modal edit-profile">
  <i class="close icon"></i>
  <div class="header">
    Edit Profile
  </div>
    <div class="content">
      <form class="ui form" action="/profile" method="post" id="edit-profile" enctype="multipart/form-data">
        <div class="field">
          <label>First Name</label>
          <input type="text" name="title">
        </div>
        <div class="field">
          <label>Last Name</label>
          <input type="text" name="type">
        </div>
        <div class="field">
          <label>Job Position</label>
          <input type="text" name="link">
        </div>
        <div class="field">
          <label>Workplace</label>
          <input type="text" name="branch">
        </div>
      </form>
    </div>
    <div class="actions">
      <div class="ui black deny button">
        Cancel
      </div>
      <button type="submit" class="ui positive right labeled icon button" onclick="document.getElementById('add-project').submit();">
        Save
        <i class="checkmark icon"></i>
      </button>
    </div>
</div>

@endsection
