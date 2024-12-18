<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/new.css">
</head>
<body>

<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "oluwoleilori22@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>






<form method="POST" name="emailContact" class="site-form">
						<h3 class="mb-5">Get In Touch</h3>
						<div class="form-group">
							<label> Name <em>*</em></label>
							<input type="text" name="userName" class="form-control px-3 py-4" placeholder="Your Name">
						</div>
						<div class="form-group">
							<label> Email <em>*</em></label>
							<input type="email" name="userEmail" class="form-control px-3 py-4" placeholder="Your Email">
						</div>
						<div class="form-group">
							<label> Phone <em>*</em></label>
							<input type="number" name="userPhone" class="form-control px-3 py-4" placeholder="Your Phone">
						</div>
						<div class="form-group mb-5">
							<label> Message <em>*</em></label>
							<textarea name="userMessage"  class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
						</div>
						<div class="form-group">
							<input style="background-color: #129bf8;" type="submit" name="send" class="btn  px-4 py-3" value="Send Message">
						</div>
                        <?php if (! empty($message)) {?>
						<div class="<?php echo $message; ?>">
							<strong>Success</strong>
						</div>
                        <?php } ?>
					</form>
</body>
</html>