<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM parc ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<h2 class="text-center">Parc Info</h2>
	<p>
		<a href="add.php" class="btn btn-link">Add New Data</a>
	</p>
	<table width='80%' border=0 class="table offset-sm-2 mt-5 w-75 p-3">
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
			echo "<td><a href=\"edit.php?id=$res[id]\" class=\"btn btn-link\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class=\"btn btn-link\">Delete</a></td>";
		}
		?>
	</table>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
