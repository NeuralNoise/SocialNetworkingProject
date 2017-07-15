<?php
	session_start();

	echo "<header id='header-rp'>
		<div class='container'>
			<div id='branding-rp'>
				<a href=''><h1>Photobin</h1></a>
			</div>
			<div id='search-bar'>
				<input type='search' placeholder='Search for people,places and things...'>
			</div>
			<nav id='top-nav'>
				<ul>
					<li><a href=''>".$_SESSION['first']."</a></li>
					<li><a href=''><i class='fa fa-users'></i></a></li>
					<li><a href=''><i class='fa fa-globe'></i></a></li>
					<li><a href=''><i class='fa fa-wechat'></i></a></li>
					<li id='more' onclick='showMore();'><i class='fa fa-list'></i>
						<ul id='more-menu'>
							<li><a href=''>Settings</a></li>
							<li><form action='".logout()."' method='POST'>
					<button class='btn-1' type='submit' name='btn-logout'>Log Out</button>
					</form></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<script src='assets/js/script.js'></script>";