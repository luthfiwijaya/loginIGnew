<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instagram</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div id ="container">
	<div class="Header">
		Instagram
	</div>

	<div class="subheader">
		Sign up to see photos and videos <br>
		from your firends.
	</div>

	<div class="button">
		<input type="submit" value="Log in with Facebook">
			<p style="margin: 1px; text-align: center; color: gray">OR</p>
	</div>

	<div class="content">
		<form action="save.php" method="POST">
			<input type="text" name="email" placeholder="Mobile Number or Email"><br>
			<input type="text"	name="fullname" placeholder="Full Name"><br>
			<input type="text"	name="username" placeholder="Username"><br>
			<input type="password"	name="passwd" placeholder="Password"><br>
			<input type="submit" value="Sign up">
		</form>
	</div>

	<div class="Footer">
		By signing up, you agree to our <br>
		Terms & Privacy Policy.
	</div>
	
</div>
</body>
</html>