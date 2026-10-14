<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" autocomplete="off"></td>
			</tr>
			<tr> 
				<td>User</td>
				<td><input type="text" name="user" autocomplete="off"></td>
			</tr>
			<tr> 
				<td>Serie</td>
				<td><input type="text" name="serie" autocomplete="off"></td>
			</tr>
						<tr> 
				<td>Ip</td>
				<td><input type="text" name="ip" autocomplete="off"></td>
			</tr>
						<tr> 
				<td>Modele</td>
				<td><input type="text" name="modele" autocomplete="off"></td>
			</tr>
						<tr> 
				<td>Composants</td>
				<td><input type="text" name="composants" autocomplete="off"></td>
			</tr>
						<tr> 
				<td>Os</td>
				<td><input type="text" name="os" autocomplete="off"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

