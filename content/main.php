<!-- Main Content -->

<!-- Check for valid password -->
<?php

	if ( session_status() == PHP_SESSION_NONE ) {
		session_start();
	}

	if ( !isset($_SESSION["user"]) ) {
		
		echo "User not logged in.";

		exit();
	}

?>

<section id="sect-content" class="section">
	<div class="container">

		<!-- Replace with your own content -->
		<div class="col-md-6 col-md-offset-3 text-center">
			<h1>APP is now STARTING ...</h1>
		</div>
		<!-- END -->

	</div>
</section>