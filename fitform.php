<doctype html>
<html>
	<head>
		<title>Fit &amp; Well Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<style>
		h1{
			font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
			color: #259014;
			font-size: 1.5em;
		}
	</style>
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

			$to = "emealia.hollis@ksuwdc.com";
			$subject = "New Message from Fit & Well";
			$message = "<?php echo $email?>\n<?php echo $fname?>\n<?php echo $lname?>\n<?php echo $phone?>\n<?php echo $message?>";

			mail($to, $subject, $message);
		?>

		<h1>Thank you for your submission</h1>


	</body>
</html>