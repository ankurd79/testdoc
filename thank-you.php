<?php
include_once '../PHPMailer/class.phpmailer.php';

if(!empty($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phn=$_POST['phn'];
	$city=$_POST['city'];
	$course=$_POST['ddlCountry'];
	$page=$_POST['page'];


		
		$to="admission@srmimt.net";
		//$to="datta.ankur79@gmail.com";
		$from=$email;
		$subject="Mail from SRM form";
		$email_text='The following query has been received with following details:<br>
		<strong>Name</strong>: ' . $name. '<br>
		<strong>Email</strong>: ' . $email. '<br>
		<strong>City</strong>: ' . $city. '<br>
		<strong>Phone</strong>: ' . $phn. '<br>
		<strong>Interested in Course</strong>: ' . $course. '<br>
		';
		
		$mail = new PHPMailer(true);
		$mail->IsSMTP();
		try {
		  $mail->SMTPDebug  = 1;
		  $mail->SMTPAuth   = true;
		  $mail->SMTPSecure = "tls";
		  $mail->Host       = "localhost";
		  $mail->Port       = 25;
		  $mail->Username   = "admin@srmimt.net";
		  $mail->Password   = "Zw[T!dp9FB?O";
		  $mail->AddAddress(trim($to), $toname);
		  $mail->SetFrom($from, $fromname);
		  $mail->Subject = $subject;
		  $mail->MsgHTML($email_text);
		  $mail->Send();
		  #echo "Mail Send to ".trim($toname)."<br />";
		} catch (phpmailerException $e) {
		  echo $e->errorMessage(); 
		} catch (Exception $e) {
		  echo $e->getMessage(); 
		}
		
		

		

}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="3;URL='http://srmimt.net/'" />
<title>SRM</title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/fonts.css" />
<!-- CSS -->

</head>

<body>
<div class="tollfree">
<div class="punchtxt">Learning / Freedom / Empowerment / Creativity / Innovation / Self Knowledge.</div>
<div class="phone">
<img src="images/contact-icon.png" />Toll Free No : 1800 180 3033
</div>
<div class="clear"></div>
</div>

<div id="top">
<div class="logo"><img src="images/srm-logo.jpg" /></div>
<div class="specifications">
<ul class="data">
	<li>Ranked<span>No.1</span><br />Private University of India</li>
	<li>Category<span>'A'</span><br />by HRD Ministry, Govt. of India</li>
	<li><span>100%</span><br />Placement</li>
	<li><span>29</span><br />Years of Enlighting Lives</li>
	<li><span>22.46</span><br />Acres of campus</li>
	<li><span>37000+</span><br />Students from around the World</li>
	<li><span>250+</span><br />Faculty</li>
	<li><span>82</span><br />AC classrooms</li>
</ul>
</div>
<div class="clear"></div>
</div>


<div class="thankyou">
<div class="thankyoutxt">
<h2>Thank you for submitting the form.</h2>
<h4>We will get back to you soon.</h4>
</div>
</div>



</body>
</html>
