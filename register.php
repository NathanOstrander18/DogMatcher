<!doctype html>
<html>
    <head> 
        <meta charset="utf-8" />
        <!-- For responsive page -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Basic HTML5 Document" />
        <meta name="keywords" content="HTML5, Responsive"/>
        <title>Login page</title> 
		
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
			<input type="text" name="username" >
			
			<br>
			
			<strong>Password: </strong>
			<input type="password" name="password" >
			<br>
			<input type="submit" />
		</div>
		</form>
    </body>
</html>