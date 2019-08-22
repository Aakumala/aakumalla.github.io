<?php
$fname=$_POST['fname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$Course=$_POST['Course'];
$msg=$_POST['message'];
//$to = "anaresh9246@gmail.com";
$to = "imagehimayatnagar@gmail.com";
$subject = "ENQUIRY MAIL FROM OUR WEBSITE RAINBOW GRAPHICS HUB";

$message = "<html><body>";
$message.= "<p>Hello Admin,</p>";
$message.= "<p>Please find contact details bellow,</p>";
$message.= "<p>Full Name :".$fname."</p>";
$message.= "<p>Mobile Number :".$mobile."</p>";
$message.= "<p>Email Id :".$email."</p>";
$message.= "<p>Course Interested:".$Course."</p>";
$message.= "<p>More Details:".$msg."</p><br/><br/><br/>";
$message.= "<p>Thank You,</p>";
$message.= "<p>Webmaster.</p>";
$message.= "</body></html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$email."\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$mail=mail($to,$subject,$message,$headers);
if($mail){
	echo "<script>alert('Thank You for your interest, Our team will contact you shortly....');
	window.location='animation.html';</script>";	
}
?> 