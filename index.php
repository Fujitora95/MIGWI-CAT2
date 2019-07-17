<!DOCTYPE html>
<html>
<head>
		<title>Data</title>
	<link rel = "stylesheet" href = "css/form.css" />
</head>
<body>
		<div class = "content">
		<h2>Sign Up</h2>
		<form action="processes/process.php" method="POST">
		
		Full Name:<br>
		<input type = "text" name = "FullName" placeholder = "Full name" maxlength= "100" required  /><br />
		
		Email Address: <br>
		<input type = "email" name = "Email" placeholder = "Email Address" maxlength = "100" required autofocus /> <br />
		
		Phone Number: <br/>
		<input type = "text" name = "PhoneNumber" placeholder = "Phone Number" maxlength = "100" required autofocus /> <br />
		
		User Name: <br/>
		<input type = "text" name = "UserName" placeholder = "User Name" maxlength = "100" required autofocus /><br/>
		
		Password: <br/>
		<input type = "password" name = "Password" placeholder = "Password" maxlength= "100" required autofocus><br/>
		
		User Type: <br/>
		<select class="form-control form-control-md" name="UserType"  id="userType" required />
        <option value = "" > User Type </option>
        <option value = "Super_User" > Super User </option>
        <option value = "Administrator" > Administrator </option>
        <option value = "Author" > Author </option>
        
        </select><br/>
		Address: <br>
		<input type = "text" name = "Address" placeholder = "Address" maxlength = "100" required autofocus /> <br /><br/>
		<div class = "signupform">
		<input type = "submit" name= "signup" value = "Sign Up">
		</div>
		</div>
		</form>
		
		
		<div class = "sidebar">
		<h2>Sign In</h2>
		<form action= "" method="POST">
		
		User Name: <br/>
		<input type = "text" name = "UserName" placeholder = "User Name" maxlength = "100" required autofocus /><br/>
		
		Password: <br/>
		<input type = "password" name = "Password" placeholder = "Password" maxlength= "100" required autofocus><br/><br/>
		<div class = "signinform">
		<input type = "submit" name = "signin" value = "Sign In">
		</div>
		</div>
		</form>
	</body>
	</html>