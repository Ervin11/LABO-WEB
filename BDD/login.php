<?php

session_start();

if (isset($_POST['submit'])) {

	include 'connect_database.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($email) || empty($pwd)) {
		
		$message = "Veuillez renseigner les champs";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Refresh:0; url=../HTML/connection.php");
			 			
		exit();

	} else {

		$sql = "SELECT * FROM membres WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {
			
			$message = "Email inexistant";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Refresh:0; url=../HTML/connection.php");
			 			
			exit();

		} else {

			if ($row = mysqli_fetch_assoc($result)) {
				
				$hashedPwdCheck = password_verify($pwd, $row['pass']);

				if ($hashedPwdCheck == false ) {
				 	
				 	$message = "Mot de passe incorrect";
					echo "<script type='text/javascript'>alert('$message');</script>";
					header("Refresh:0; url=../HTML/connection.php");

				 } elseif ($hashedPwdCheck == true) {
				 	
				 	$_SESSION['u_id'] = $row['id'];
				 	$_SESSION['u_last'] = $row['nom'];
				 	$_SESSION['u_first'] = $row['prenom'];
				 	$_SESSION['u_email'] = $row['email'];

				 	header("Location: ../HTML/index.php?login=success");
					exit();

				 }
			}
		}
	}

} else {

	header("Location: ../HTML/connection.php");
	exit();
}

?>