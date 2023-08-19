<!DOCTYPE html>
<html lang="en">
<?php
include './app/db-config.php';
include( "./theme/partials/site/page-header.php" );
?>
        <link href="./theme/custom/custom.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


		<div class="login">
			<h1>Login</h1>
			<form action="./app/authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>

<?php
include( "./theme/partials/site/footer.php" );
?>
