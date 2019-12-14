<?php  
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "naijahack2019";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if (mysqli_connect_error()) {
		die("ERROR CONNECTING TO DATABASE");
	}

	function cookie_session_destroy(){
		unset($_SESSION);
		setcookie('id', "", time() - 60*60);
		$_COOKIE['id'] = "";

		session_destroy();
	}

?>