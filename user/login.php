<?php  
	
	session_start();

	include 'dbconfig.php';

	$error = "";

	if (array_key_exists('logout', $_GET) || array_key_exists('session', $_GET)) {
		cookie_session_destroy();
		header('Location: login.php');
	} else {
		if (array_key_exists('id', $_COOKIE) && $_COOKIE['id']) {
			if (array_key_exists('id', $_SESSION)) {
				header('Location: ../admin');
			}
		} 
	}

	if (array_key_exists('submit', $_POST)){
		$usr = $_POST['username'];
        $pwd = $_POST['password'];
        $rem = $_POST['remember-me'];

		if (!$usr) {
			$error .= "Username field is empty<br>";
		}

		if (!$pwd) {
			$error .= "Password field is empty<br>";
		}

		if ($error != "") {
			$error = "<p>The following errors were detected while trying to log you in: </p>".$error;
		} else {
			$sqli = "SELECT * FROM admin WHERE username = '".mysqli_real_escape_string($conn, $usr)."'";
			$resulti = mysqli_query($conn, $sqli);
			$rowi = mysqli_fetch_array($resulti);

			if (isset($rowi)) {
				if (password_verify($pwd, $rowi['password'])) {
					$_SESSION['id'] = $rowi['id'];
					$_SESSION['id'] = $rowi['id'];
					setcookie('id', $rowi['id'], time() + 60*30);
					header('Location: ../admin');
				} else {
					$error = "<p>Incorrect USERNAME/PASSWORD combination</p>";
				}
			} else {
				$error = "<p>Sorry! User does not exist.</p>";
			}
		}
	}

?>