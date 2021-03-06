<!--
Programmer name: Ms. Mariyam Malika Asim, TP056480, BSc. (Hons) in Computer Science, Asia Pacific University (APU), Technology Park Malaysia
Program name: navbar.blade.php
Description: To provide the contents for navigation bar in website
First written on: 28/07/2021
Edited on: 07/10/2021
-->

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
