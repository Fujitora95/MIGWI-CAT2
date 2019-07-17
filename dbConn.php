<?php
require_once "constants.php";


$DbConn = new mysqli(HOSTNAME,HOSTUSER,HOSTPASS,DBNAME);
if($DbConn->connect_error){
		die("Connection failed: <br />" .$DbConn->connect_error);	
	}else {
	//	print "Connection successful" ;
		// comment the obove out so that it does not print conn succssfull ll the time
	}
?>