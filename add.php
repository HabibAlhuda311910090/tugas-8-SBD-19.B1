<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Karyawan</td>
				<td><input type="text" name="id_karyawan"></td>
			</tr>
			<tr> 
				<td>Nama Karyawan</td>
				<td><input type="text" name="nama_karyawan"></td>
			</tr>
			<tr> 
				<td>No.Telp</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_karyawan = $_POST['id_karyawan'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$no_telp = $_POST['no_telp'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($link, "INSERT INTO karyawan (id_karyawan,nama_karyawan,no_telp) VALUES('$id_karyawan','$nama_karyawan','$no_telp')");
	
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View karyawan</a>";
	}
	?>
</body>
</html>