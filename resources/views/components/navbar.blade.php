<!-- navbar contents -->
<div class="ui secondary pointing menu remove-margin">
	<div class="header item">
		<img src = "\images\logo.svg" alt="Logo SVG"/>
	</div>
	<div class="right menu">
		<a class="item {{Route::current()->getName() == 'dashboard' ? 'active' : ''}}" href='/dashboard'>
			Dashboard
		</a>
		<a class="item {{Route::current()->getName() == 'profile' ? 'active' : ''}}" href='/profile'>
			Profile
		</a>
		@if (Auth::check() && Auth::user()->role == 'admin')
		
		<a class="item {{Route::current()->getName() == 'staff' ? 'active' : ''}}" href="/staff">
			Staff
		</a>
		@endif
		<a class="item" href="/logout">
			Logout
		</a>
	</div>
</div>
