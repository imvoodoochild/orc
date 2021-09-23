<!-- navbar contents -->
<div class="ui secondary pointing menu remove-margin">
	<div class="header item">
	Orc
	</div>
	<div class="right menu">
		<a class="item {{Route::current()->getName() == 'dashboard' ? 'active' : ''}}" href='/dashboard'>
			Dashboard
		</a>
		<a class="item {{Route::current()->getName() == 'account' ? 'active' : ''}}" href='/account'>
			Account
		</a>
		@if (Auth::check() && Auth::user()->role == 'admin')
		
		<a class="item {{Route::current()->getName() == 'users' ? 'active' : ''}}" href="/users">
			Users
		</a>
		@endif
		<a class="item" href="/logout">
			Logout
		</a>
	</div>
</div>
