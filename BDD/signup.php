<?php 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	if(isset($_POST['submit'])) {

		include_once 'connect_database.php';

		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$adress = mysqli_real_escape_string($conn, $_POST['adress']);
		$cp = mysqli_real_escape_string($conn, $_POST['cp']);
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		$pwdCheck = mysqli_real_escape_string($conn, $_POST['pwdCheck']);
		$date = date('Y/m/d');

		if(empty($last) || empty($first) || empty($adress) || empty($cp) || empty($city) || empty($email) || empty($pwd)) {
			
			$message = "Veuillez renseigner tous les champs";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Refresh:0; url=../HTML/inscription.php?signup=empty");

		 	exit();

		} else {

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				
				$message = "Email invalide";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header("Refresh:0; url=../HTML/inscription.php");
		 		
		 		exit();

				} else {

					if (!preg_match("/^[a-zA-Z]*$/", $last) || !preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $city)) {

						$message = "Caractères non autorisés";
						echo "<script type='text/javascript'>alert('$message');</script>";
						header("Refresh:0; url=../HTML/inscription.php");
					

					} else { 

					$sql = "SELECT * FROM membres WHERE email='$email'";
					$result =  mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						
						$message = "Email déjà utilisé";
						echo "<script type='text/javascript'>alert('$message');</script>";
						header("Refresh:0; url=../HTML/inscription.php");
			 			
			 			exit();

					} else {
						
						if ($pwdCheck != $pwd) {
							
						$message = "Confirmation du mot de passe incorrect";
						echo "<script type='text/javascript'>alert('$message');</script>";
						header("Refresh:0; url=../HTML/inscription.php");

						} else {

						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

						$sql = "INSERT INTO membres (nom, prenom, adresse, code_postal, ville, email, pass, date_inscription) VALUES ('$last', '$first', '$adress', '$cp', '$city', '$email', '$hashedPwd', '$date');";
						mysqli_query($conn, $sql);
						
						$message = "Inscription avec succès !";
						echo "<script type='text/javascript'>alert('$message');</script>";
						header("Refresh:0; url=../HTML/connection.php");
			 			exit();
			 			}
					}

				}
			}	
		}

} else {

	 header("Location: ../HTML/inscription.php");
	 exit();
}

?>