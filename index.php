<?php 

session_start();

?>

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Your Website</title>
</head>

<body>

	<div id="wrapper">

		<header>
			<nav>
				<ul>
					<li><a href="#">Your menu</a></li>
					<li><a href="#">Your menu</a></li>
					<li><a href="#">Your menu</a></li>
					<li><a href="#">Your menu</a></li>
				</ul>
			</nav>
		</header>
		
		<section>
		
			<article>
				<header>
					<h2>Article title</h2>
					<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
				</header>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
			</article>
			
			<article>
				<header>
					<h2>Article title</h2>
					<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
				</header>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
			</article>
			
		</section>

		<aside>
			<fieldset>
			<table>
			<th><h2>User Login</h2></th>
			<tr>

				<td><label>Username</label></td>
				<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
			</fieldset>
			</table>
		</aside>

		<footer>
			<p>Copyright 2009 Your name</p>
		</footer>
	</div>
</body>

</html>