<?php
  $dbhost = "182.50.131.14";
	$dbuser = "mtastudDB1";
	$dbpass = "mtastudDB1!";
	$dbname = "mtastudDB1";
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Testing for connection error
  if(mysqli_connect_errno()) {
    die("DB connection error: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  }
  
  mysqli_set_charset($connection, 'utf8');
?>