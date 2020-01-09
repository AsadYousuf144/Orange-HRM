<html>
<head>
<link rel="stylesheet" href="styles/style_login.css" />
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'></head>
<body style="background-image:url('images/bg.jpg');">
	<div class="lg-container">
		<h1>Login</h1>
		<form action="check.php" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="id" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="pass" id="password" placeholder="password" />
			</div>
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="message"></div>
	</div>
</body>
</html>
</html>