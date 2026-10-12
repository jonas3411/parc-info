<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM parc WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$user = $resultData['user'];
$serie = $resultData['serie'];
$ip = $resultData['ip'];
$modele = $resultData['modele'];
$composants = $resultData['composants'];
$os = $resultData['os'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr> 
				<td>User</td>
				<td><input type="text" name="user" value="<?php echo $user; ?>"></td>
			</tr>
			<tr> 
				<td>Serie</td>
				<td><input type="text" name="serie" value="<?php echo $serie; ?>"></td>
			</tr>
			<tr> 
				<td>Ip</td>
				<td><input type="text" name="ip" value="<?php echo $ip; ?>"></td>
			</tr>
			<tr> 
				<td>Modele</td>
				<td><input type="text" name="modele" value="<?php echo $modele; ?>"></td>
			</tr>
			<tr> 
				<td>Composants</td>
				<td><input type="text" name="composants" value="<?php echo $composants; ?>"></td>
			</tr>
			<tr> 
				<td>Os</td>
				<td><input type="text" name="os" value="<?php echo $os; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
