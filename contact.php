<?php
// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	// Validate email adress
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Make sure the form fields are not empty
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$responses[] = 'Please complete all fields!';
	}
	// If there are no errors
	if (!$responses) {
		// Where to send the mail? It should be your email address
		$to      = 'merhaba@muhyal.com';
		// Send mail from which email address?
		$from = 'noreply@muhyal.com';
		// Mail subject
		$subject = $_POST['subject'];
		// Mail message
		$message = $_POST['msg'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// Try to send the mail
		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
}
?>
<?php
include './app/db-config.php';
include( "./theme/partials/site/page-header.php" );
?>

        <link href="./theme/custom/custom.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<form class="contact" method="post" action="">
			<div class="fields">
				<label for="email">
					<i class="fas fa-envelope"></i>
					<input id="email" type="email" name="email" placeholder="Your Email" required>
				</label>
				<label for="name">
					<i class="fas fa-user"></i>
					<input type="text" name="name" placeholder="Your Name" required>
				<label>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="msg" placeholder="Message" required></textarea>
			</div>
     <?php if ($responses): ?>
     <p class="responses"><?php echo implode('<br>', $responses); ?></p>
     <?php endif; ?>
			<input type="submit">
		</form>

<?php
include( "./theme/partials/site/footer.php" );
?>

