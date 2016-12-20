<!DOCTYPE html>
<html>

	<head>
		<title>PHP Basic Authentification</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<!-- Style sheets -->
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- Scripts -->
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>

		<!-- PHP Requests Processing -->
		<?php

			session_start();

			$auth = false;
			$action = null;
			$page = null;
			$msg = "";

			//Check for logout request
			$action = isset($_REQUEST["action"]) ? trim($_REQUEST["action"]) : "";

			// Get form data
			$user = isset($_POST["username"]) ? trim($_POST["username"]) : null;
			$pass = isset($_POST["password"]) ? trim($_POST["password"]) : null;
			$submit = isset($_POST["submit"]) ? true : false;


			// Valid users and their passwords
			$users = array(
				"user1" => "password1",
				"user2" => "password2"
			);

			// Check if session is valid
			if ( isset($_SESSION["user"]) && $_SESSION["user"]) {
				$auth = true;

				//log out
				if ( $auth && $action == "exit" ) {

					unset($_SESSION["user"]);

					session_destroy();

					include "content/login.php";

					exit();
				}
			}
			else {

				$auth = false;

				// Check if user exists
				if ($user && array_key_exists($user, $users) ) {

					// Check for valid password
					if ( $users[$user] == $pass ) {

						$auth = true;

						$_SESSION["user"] = $user;
					}
					else {
						$msg = "Invalid username/password.";
					}
				}
				else {
					$msg = "Invalid username and/or password. Try again.";
				}

				// clear message
				if ( !$submit ) {
					$msg = "";
				}
			}


			// load the right page
			if ( $auth ) {
				include "content/main.php";
			}
			else {
				include "content/login.php";
			}
		?>
		<!-- END -->

	</body>
</html>
