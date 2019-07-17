<?php
    session_start();

	require_once "../dbConn.php";
	
	if(isset($_POST["signup"])){ 
		$FullName = mysqli_real_escape_string($DbConn, $_POST["FullName"]);
		$email = mysqli_real_escape_string($DbConn, $_POST["Email"]);
		$PhoneNumber = mysqli_real_escape_string($DbConn, $_POST["PhoneNumber"]);
		$UserName = mysqli_real_escape_string($DbConn, $_POST["UserName"]);
		$Password = mysqli_real_escape_string($DbConn, $_POST["Password"]);
		$UserType = mysqli_real_escape_string($DbConn, $_POST["UserType"]);
		$Address = mysqli_real_escape_string($DbConn, $_POST["Address"]);
		
		$rounds = array( "cost" => 7 );
		$users_insert = "INSERT INTO users(Full_Name, email, phone_Number, User_Name, Password, AccessTime, UserType, Address) VALUES ('$FullName', '$email', '$PhoneNumber', '$UserName', '$Password', UNIX_TIMESTAMP(), '$UserType','$Address')";
		
		if($DbConn->query($users_insert)===TRUE) {
			echo "Record stored successfully";
		} else {
			echo $DbConn->error;
		}
		
	
	}
	if (isset($_POST["signin"])){    

        $username_entered = mysqli_real_escape_string($dbconn, $_POST["UserName"]);
        $password_entered = mysqli_real_escape_string($dbconn, $_POST["Password"]);
    
        $spot_username = "SELECT * FROM users WHERE username = '$username_entered' LIMIT 1";
		
		$user_res = $dbconn->query($spot_username);
		
		$user_type = $row['User Type'];
		
		if ($user_res->num_rows > 0){
			
			$_SESSION["control"] = $user_res->fetch_assoc();
			$password_stored = $_SESSION["control"]["password"];
			
			if(password_verify($password_entered, $password_stored)){
				if($user_type = "Administrator"){
					
					header("Location: ../Admin.php");
					
				}elseif($user_type = "Super User")
				header("Location: ../SU.php");
					
				}else{
					
					header("Location: ../Author.php");
					
				}
				}else{
                    header("Location: ../");
		            exit();
                 }
		}else{
			
        header("Location: ../");
		exit();
		
       }
?>
					