<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="format-detection" content="telephone=no" /> 
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0" />
	<title>Acceligize</title>
	
	<link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<script src="lib/jQuery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="lib/jquery.sticky.js"></script>
	<script type="text/javascript" src="lib/common.js"></script>

	<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
	<link rel="icon" href="images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/pages.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<style type="text/css">
		.in-touch {
			margin-top: 80px;
			margin-bottom: 80px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header class="clearfix">
		<div class="connect">
			<div class="grid content-wrap">
				<div class="grid-row">
					<div class="grid-cell">
						<a href="contact.html#map" class="fa fa-map-marker fb" title="facebook"></a>
						<i class="fa fa-phone"></i><span> 1 844 295 2907</span>
					</div>
					<div class="grid-cell tright">

						<a href="https://www.facebook.com/Acceligize" class="fa fa-facebook fb" title="facebook"></a>
						<a href="https://www.twitter.com" class="fa fa-twitter tw" title="twitter"></a>
						<a href="https://www.linkedin.com/company/4812648" class="fa fa-linkedin gp" title="linkedin"></a>
						<a href="https://www.linkedin.com/company/4812648" class="fa fa-google-plus gp" title="google-plus"></a>
						<a href="mailto:info@Acceligize.com" class="fa fa-envelope-o em" title="email"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="nav-wrapper" id="header">
			<section class="content-wrap">
				<div class="grid">
					<div class="grid-row">
						<div class="grid-cell logo">
							<a href="index.html"><img src="images/logo-acceligize.png" alt=""/></a>
						</div>
						<div class="grid-cell nav-link tright">
							<ul>
								<li>
									<a href="about.html">ABOUT</a>
								</li>
								<li>
									<a href="services.html">SERVICES</a>
								</li>
								<li>
									<a href="career.html">CAREER</a>
								</li>
								<li>
									<a href="contact.html">CONTACT</a>
								</li>
							</ul>
						</div>						
					</div>
				</div>
			</section>
		</div>
	</header>
	<section class="page-header">
		<div class="content-wrap">
			<h1>Thank You To Get In Touch With Us</h1>
			<p>Get back to main site to Know More.</p>
		</div>
	</section>

	<section class="in-touch">
		<div class="content-wrap">



			<?php

			if(isset($_POST['email'])) {
			// EDIT THE 2 LINES BELOW AS REQUIRED
				$email_to = "lakhani.rj@gmail.com";
				$email_subject = "Your email subject line";

				function died($error) {

				// your error code can go here
					echo "We are very sorry, but there were error(s) found with the form you submitted. ";
					echo "These errors appear below.<br /><br />";
					echo $error."<br /><br />";
					echo "Please go back and fix these errors.<br /><br />";
					die();
				}
				// validation expected data exists

				if(!isset($_POST['first_name']) ||

					!isset($_POST['last_name']) ||

					!isset($_POST['email']) ||

					!isset($_POST['telephone']) ||

					!isset($_POST['job_title'])) ||

					!isset($_POST['company'])) {
					died('We are sorry, but there appears to be a problem with the form you submitted.');
			}
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $job_title = $_POST['job_title']; // required
    $company = $_POST['company']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email_from)) {
    	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$first_name)) {
    	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
    }

    if(!preg_match($string_exp,$last_name)) {
    	$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    }

    if(strlen($company) < 2) {
    	$error_message .= 'The Job details you entered do not appear to be valid.<br />';
    }
    if(strlen($job_title) < 2) {
    	$error_message .= 'The Job details you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
    	died($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }

    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Job Title: ".clean_string($job_title)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";


// create email headers

    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);  
    ?>

    <!-- include your own success html here -->
    <a class="button" href='http://www.acceligize.com'>Go back to Site</a><br><br>
    <a class="button" href='http://www.acceligize.com/abc.pdf'>Download</a><br><br>
    Thank you for contacting us. We will be in touch with you very soon.
    <?php
}
?>

</div>
</section>



<footer>
	<div class="grid content-wrap">
		<div class="grid-row">
			<div class="grid-cell desc">
				<h3>Acceligize</h3>
				<p class="text">
					Acceligize was founded in 2005<br>
					by three Indian veterans,<br>
					intent on offering high technology<br>
					companies a new option to drive demand<bR>
					while lowering the cost of sales.
				</p>
			</div>
			<nav class="grid-cell">
				<ul class="nav-link clearfix">
					<li>
						<a href="#">ABOUT</a>
					</li>
					<li>
						<a href="#">SERVICES</a>
					</li>
					<li>
						<a href="#">CAREER</a>
					</li>
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
				</ul>
			</nav>
			<div class="grid-cell address-box">
				<h3>Address</h3>
				<p class="text">3rd Floor, Sai Pearl, <br>
					Near Bollywood E-Square, <br>
					Old Mundhwa Road, Kharadi, <br>
					Pune, Maharashtra - 411014 India
				</p>
				<p class="text">
					<b>Phone</b>: +1-844-295-2907
				</p>
				<p class="text">
					<b>Email</b>: <a href="mailto:info@Acceligize.com">info@Acceligize.com</a>
				</p>
			</div>
		</div>
	</div>
</footer>
<div class="connect">
	<div class="content-wrap tcenter">
		Copyright &copy and All rights reserved by Acceligize.com |  Powered by <a href="#">RahilLakhani</a>.
	</div>
</div>
<script type="text/javascript">
	$(window).load(function(){
		$("#header").sticky({ topSpacing: 0 });
	});
	$(document).ready(function() {
		$( "#slideOpen" ).click(function() {
			if ( $(this).height() != 16)
				$( this ).animate({ height: 16 }, 1000 );
			else
				$( this ).animate({ height: 200 }, 1000 );
		});
	});
</script>





</body>
</html>