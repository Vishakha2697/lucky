<?php include "db.php"; ?>


<?php 

	if (isset($_POST['submit'])) {

		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		$query = "SELECT * FROM user WHERE email = '$email'";
		$show_user_info = mysqli_query($connection, $query);
		if (!$show_user_info) {
			die("Sorry! Query failed. " . mysqli_error($connection));
		}

		while ($row = mysqli_fetch_assoc($show_user_info)) {
			
			
			$db_user_password 	=  $row['password'];
			$db_email 		=  $row['email'];

		}
        
        
        
		if (password_verify($password,$db_user_password)) {

		

			header("Location: ../index.php");

		} 

	}

?>