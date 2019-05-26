<?php include('form_process.php') ?>
<link rel="stylesheet" type="text/css" href="contactform.css">
<div class="container">
	<!-- PHP_SELF e therret faqen (form-process) vet duke u varur nga line 1 -->
	<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
		<h3>Quick Contact</h3>
		<h4>Contact us today, and get reply within 24 hours !</h4>
		<fieldset>
			<input type="text" placeholder="Your Name" tabindex="1" name=" name" value="<?= $name ?>" autofocus>
			<span class="error" ><?= $name_error ?></span>
		</fieldset>
		<fieldset>
			<input type="email" placeholder="Your Email Address"  tabindex="2" name="email" value="<?= $email ?>">
			<span class="error" ><?= $name_error ?></span>
		</fieldset>
		<fieldset>
			<input type="tel" placeholder="Your Phone Number" tabindex="3" name="phone" value="<?= $phone ?>">
			<span class="error" ><?= $phone_error ?></span>
		</fieldset>
		<fieldset>
			<input type="url" placeholder="Your Website starts with http://" tabindex="3" name="url" value="<?= $url ?>">
			<span class="error" ><?= $url_error ?></span>
		</fieldset>
		<fieldset>
			<textarea placeholder="Type Your Message Here..." tabindex="5" name="message" value="<?= $message ?>"></textarea>
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
		<div class="success"><?= $success; ?></div>
	</form>
</div>