<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
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
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO parc (`name`, `user`, `serie`, `ip`, `modele`, `composants`, `os`) VALUES ('$name', '$user', '$serie', '$ip', '$modele', '$composants', '$os')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
