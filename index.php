<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM parc ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h2>Parc Info</h2>
	<p>
		<a href="add.php" class="add">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nom de l'appareil</strong></td>
			<td><strong>Nom d'utilisateur assigné</strong></td>
			<td><strong>Numéro de série</strong></td>
			<td><strong>Adresse IPV4</strong></td>
			<td><strong>Modèle</strong></td>
			<td><strong>Composants pricipaux</strong></td>
			<td><strong>Version d'OS</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['user']."</td>";
			echo "<td>".$res['serie']."</td>";
			echo "<td>".$res['ip']."</td>";	
			echo "<td>".$res['modele']."</td>";
			echo "<td>".$res['composants']."</td>";
			echo "<td>".$res['os']."</td>";	
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
