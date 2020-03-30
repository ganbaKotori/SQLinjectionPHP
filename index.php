
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<h1>Login Form<span> SQL Injection Demo</span></h1>
		<nav class= "codrops:demos">
			<span class="group"> CECS 378 :: Fall 2019 :: Group Project</span>
			<a href="index.html"> Alex Ramirez</a>
			<a href="index.html"> Christine Duong</a>
			<a href="index.html"> John So</a>
			<a href="index.html"> Justin Reid</a>
			<a href="index.html"> Omar Kermiche</a>
		</nav>
	</header>
	<section>
		<div id="container_demo">
			<a class="hiddenanchor" id="toregister"></a>
			<a class="hiddenanchor" id="tologin"></a>
			<div id="wrappper">
				<div id="login" class="animate form">
					<form action="scriptvalidated.php" autocomplete="off" method="post">
						<h1>Log in</h1>
						<p>
							<label for="username" class="uname" data-icon="u">Your username</label>
							<input id="form_innput_username" name="form_innput_username" required="required" type="text" placeholder="Enter your username"/>
						</p>
						<p>
							<label for="password" class="youpasswd" data-icon="p">Your password</label>
							<input id="form_innput_password" name="form_innput_password" required="required" type="password" placeholder="Enter your password"/>
						</p>
						<p class="Login button">
							<input type="submit" class="LoginButton" value="Login" />
						</p>
					</form>
				</div>
				
			</div>
		</div>
	</section>

</body>
</html>