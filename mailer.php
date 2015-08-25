<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		(empty($_POST["name"])) ? $errors['name'] = "The name field is required" : $subject = $_POST['name'];
		
		(empty($_POST["message"])) ? $errors['message'] = "The message field is required" : $text = $_POST['message'];

		if (empty($_POST["email"])) 
			$errors['email'] = "The email field is required";

		else if (!preg_match("/\S+@\S+\.\S+/", $_POST["email"]))
			$errors['email'] = "The email field is invalid";

		else
			$email = $_POST['email'];

		if(!empty($errors)){
			header("Location: index.php?" . http_build_query($errors) . "#contact");
			die;
		}


		$to = "thomas.william.powers@gmail.com";

		$headers = "From: " . $email . "\r\n";

		Mail($to, $subject, $text, $headers);

		$successMsg = "Your message has been sent";

		header("Location: index.php?success=" . $successMsg . "#contact");
	}

?>
