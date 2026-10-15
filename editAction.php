<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
		<?php
		// Include the database connection file
		require_once("dbConnection.php");

		if (isset($_POST['update'])) {
			// Escape special characters in a string for use in an SQL statement
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$name = mysqli_real_escape_string($mysqli, $_POST['name']);
			$user = mysqli_real_escape_string($mysqli, $_POST['user']);
			$serie = mysqli_real_escape_string($mysqli, $_POST['serie']);
			$ip = mysqli_real_escape_string($mysqli, $_POST['ip']);
			$modele = mysqli_real_escape_string($mysqli, $_POST['modele']);
			$composants = mysqli_real_escape_string($mysqli, $_POST['composants']);
			$os = mysqli_real_escape_string($mysqli, $_POST['os']);
			// Check for empty fields
			if (empty($name) || empty($user) || empty($serie) || empty($ip) || empty($modele) || empty($composants) || empty($os)) {
				if (empty($name)) {
					echo "<font color='red'>Name field is empty.</font><br/>";
				}
				
				if (empty($user)) {
					echo "<font color='red'>User field is empty.</font><br/>";
				}
				
				if (empty($serie)) {
					echo "<font color='red'>Serie field is empty.</font><br/>";
				}
				if (empty($ip)) {
					echo "<font color='red'>Ip field is empty.</font><br/>";
				}
				
				if (empty($modele)) {
					echo "<font color='red'>Modele field is empty.</font><br/>";
				}
				
				if (empty($composants)) {
					echo "<font color='red'>Composants field is empty.</font><br/>";
				}
				if (empty($os)) {
					echo "<font color='red'>Os field is empty.</font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();' class=\"btn btn-link\">Go Back</a>";
			} else {
				// Update the database table
				$result = mysqli_query($mysqli, "UPDATE parc SET `name` = '$name', `user` = '$user', `serie` = '$serie', `ip` = '$ip', `modele` = '$modele', `composants` = '$composants', `os` = '$os' WHERE `id` = $id");
				
				// Display success message
				echo "<p><font color='green'>Data updated successfully!</p>";
				echo "<a hre	</body>f='index.php' class=\"btn btn-link\">View Result</a>";
			}
		}
		?>
	</body>
</html>