<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_karyawan'];
	
	$id_karyawan=$_POST['id_karyawan'];
	$nama_karyawan=$_POST['nama_karyawan'];
	$no_telp=$_POST['no_telp'];
		
	// update user data
	$result = mysqli_query($link, "UPDATE karyawan SET  id_karyawan='$id_karyawan',nama_karyawan='$nama_karyawan',no_telp='$no_telp' WHERE id_karyawan=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];


// Fetech user data based on id
$result = mysqli_query($link, "SELECT * FROM karyawan WHERE id_karyawan=$id");
$rows = mysqli_fetch_array($result);
 

?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID Karyawan</td>
				<td><input type="text" name="id_karyawan" value=<?php echo $rows['id_karyawan'];?>></td>
			</tr>
			<tr> 
				<td>Nama Karyawan</td>
				<td><input type="text" name="nama_karyawan" value=<?php echo $rows['nama_karyawan'];?>></td>
			</tr>
			<tr> 
				<td>No.Telp</td>
				<td><input type="text" name="no_telp" value=<?php echo $rows['no_telp'];?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>