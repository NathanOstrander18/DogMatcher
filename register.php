<!doctype html>
<html>
    <head> 
        <meta charset="utf-8" />
        <!-- For responsive page -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Basic HTML5 Document" />
        <meta name="keywords" content="HTML5, Responsive"/>
        <title>Login page</title> 
		
		<script type="text/javascript" src="pwFormat.js"></script>
		<link rel="stylesheet" href="mainstyle.css">

    </head>

    <body>
		<form action="regConfirm.php" method="post">
        <h1>Dog Matcher</h1>
		
			<hr>
			<h3>Register</h3>
		
		
			<div class="form-group">
			<strong>First Name: </strong>
			<input type="text" name="firstname"  >
			
			<br>
			
			<div class="form-group">
			<strong>Last Name: </strong>
			<input type="text" name="lastname"  >
			
			<br>
			
			<div class="form-group">
			<strong>Username: </strong>
			<input type="text" name="username" required>
			
			<br>
			
			<strong>Password: </strong>
			<input type="password" name="password" id = "password"  required>
			<br>
			<input type="submit" />
			<p>Password must be between 3-18 characters and contain at least 1 Capital letter and at least 1 number!</p>
		</div>
		</form>
    </body>
</html>