<?php 

	if (isset($_POST)) {
		$pdo = new PDO("mysql:host=localhost;dbname=registration","root","mypassword");
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phonenumb = $_POST['phonenumb'];

		$q = "INSERT INTO users(firstname,lastname,username,email,phonenumb)VALUES(:firstname,:lastname,:username,:email,:phonenumb)";
		$r = $pdo->prepare($q);
		$r->execute(array(":firstname"=>$firstname, ":lastname"=>$lastname, ":username"=>$username, ":email"=>$email, ":phonenumb"=>$phonenumb));
		echo "success";
	}

 ?>