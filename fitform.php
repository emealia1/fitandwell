<doctype html>
<html>
	<head></head>
	<body>
	<?php    
		if (mail($to, $subject, $message))
		    {   
		        header('Location: http://http://emealia1.github.io/fitandwell');       
		    }
		?>
		<?php 
			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$message = $_POST["message"];
		?>

		<h1>Thank you for your submission</h1>


		<?php
			$to = "emealia.hollis@ksuwdc.com";
			$subject = "New Message from Fit &amp; Well";
			$message = "<?php echo $email?>\n<?php echo $fname?>\n<?php echo $lname?>\n<?php echo $phone?>\n<?php echo $message?>";

			mail($to, $subject, $message);
			?>
	</body>
</html>