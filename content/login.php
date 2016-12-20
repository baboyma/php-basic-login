<!-- LOGIN FORM -->

<section id="sect-login" class="section">
	<div class="container">
		<div class="col-md-4 col-md-offset-4 text-center">
			<h1>-- Application --</h1>
		</div>

		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">Sign in</div>

				<div class="panel-body">
					<form class="" action="./" method="post">
						<div class="form-group">
							<input id="username" type="text" name="username"
								class="form-control" placeholder="username"
								value="<?php echo $user; ?>" />
						</div>

						<div class="form-group">
							<input id="password" type="password" name="password"
								class="form-control" placeholder="password" />
						</div>

						<div class="form-group">
							<label id="feedback"><?php echo $msg; ?></label>
						</div>

						<div class="form-group">
							<button type="submit" name="submit"
								class="btn btn-primary btn-block">Reset Password</button> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="js/login.js"></script>