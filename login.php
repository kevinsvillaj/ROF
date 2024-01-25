<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background-color: #FF5733;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		form {
			background-color: white;
			padding: 30px;
			border-radius: 10px;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"],
		select,
		textarea {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: none;
			border-radius: 4px;
			background-color: #f8f8f8;
			resize: none;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100%;
		}

		h1 {
			margin-top: 0;
			text-align: center;
		}

		.error {
			color: red;
			font-size: 12px;
			margin: 5px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="process_login.php" method="post">
			<h1>Login</h1>

			<label for="email"><b>Email</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<input type="submit" value="Log In">
			<div>
				Don't have an account? <a href="signup.php">Sign up</a>
			</div>
		</form>
	</div>
</body>
</html>
