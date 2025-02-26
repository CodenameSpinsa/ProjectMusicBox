<?php

/* This is how you make comments in php */
/* My Subject and E-mail variables */ 
/* variables are defined by the $ sign */

	$emailSubject = 'PHP Scripting';
	$webMaster = 'wardspen@gmail.com';
	
/* Gathering Data Variables */
/* POST must be in all caps when writing */

	$fullnameField = $_POST['fullname'];
	$emailField = $_POST['email'];
	$phonenumberField = $_POST['phonenumber'];
	$mostactiveField = $_POST['mostactive'];	
	$ratingField = $_POST['rating'];
	$messageField = $_POST['message'];
	$updatesField = $_POST['updates'];

/* Text is referred to as string when coding. */

/* Beyond the EOD you can have no spaces. You must go straight to the content. You have to be pressed against the wall of the line. */
	
	$body = <<<EOD
<br><hr><br>
Fullname: $fullname <br>
Email: $email <br>
Phone Number: $phonenumber <br>
Most Active: $mostactive <br>
Rating: $rating <br>
Message: $message <br>
Updates: $updates <br>
EOD;


	$headers = "From: $email\r\n";
/* This lets php know to register html tags as html and not regular type. */
	$headers .= "Content-type: text/html\r\n"; 
/* This links it all together on what's being sent. */
	$success = mail ($webMaster, $emailSubject, $body, $headers);
	
	
/* What the user sees after submitting. After the EOD you can just copy your whole website into the php code. */

	$theResults = <<<EOD
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spencer Ward</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>
<body id="thankyoupage">
	<div id="container">
    	<div id="logo">
			<img src="images/icons/Logo.png" width="167" height="164" alt="My Logo" />
        </div><!-- End of Logo div -->	
			<div id="topnav">
            	<ul>
				  <li><a href="index.html">Home</a></li>
				  <li><a href="about.html">About</a></li>
				  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="flashversion.html">Flash Version</a></li>
				</ul>
			</div><!-- End of Top navigation div -->
            <div id="banner">
            	<img src="images/banner/Banner2.jpg" width="1200" height="300" alt="Banner 2" />
            </div><!-- End of banner div -->  
            
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>Thank you for leaving a comment. I will get back to you as soon as possible.</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
     
<div id="footer"><a href="mailto:wardspen@gmail.com">Spencer Ward</a> | Phone: 517-303-6434 | Bachelor of arts in Advertising | Michigan State University</div><!-- End of footer div -->
	</div><!-- End of container div -->
</body>
</html>
EOD;
echo "$theResults"; /* Echo just means to show something. */

	
?>
