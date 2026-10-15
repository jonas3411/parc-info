<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php" class="btn btn-link">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>User</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr> 
				<td>Serie</td>
				<td><input type="text" name="serie"></td>
			</tr>
			<tr> 
				<td>Ip</td>
				<td><input type="text" name="ip"></td>
			</tr>
						<tr> 
				<td>Modele</td>
				<td><input type="text" name="modele"></td>
			</tr>
						<tr> 
				<td>Composants</td>
				<td><input type="text" name="composants"></td>
			</tr>
						<tr> 
				<td>Os</td>
				<td><input type="text" name="os"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

