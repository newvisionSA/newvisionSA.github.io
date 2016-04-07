---
layout: default
title: Thanks for the Mail
---
   <?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n $email \n  Message: $message";
$recipient = "james@thebrandconsultant.co.za";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<h2>Thank You for your mail - one of our team members will be in contact with you shortly." . " -" . "<a href='index.html'> Return Home</a></h2>";
?>
   </div>
</body>
</html>

		            
		       