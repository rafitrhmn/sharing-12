<html>
<head>
    <title>pemograman berbasis objek </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-color: powderblue !important;
        }
        form {
        font-size: 25px;
        color: white;
        background: #2F495A;
        margin: 10px auto;
        padding: 50px 20px 50px 20px;
        border-radius: 5px;
        }
        table {
		background: #2F495A;
        color:white;
        width: 600px;
        padding: 10px 10px 50px 10px;
        }
        </style>
</head>
<body>
<?php
	$database = new mysqli('localhost','root','','akademik');
	if($database->connect_errno){
		echo"Database Tidak Dapat Terhubung";
	}
	if(isset($_POST['simpan'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$no_telepon = $_POST['no_telepon'];
	

	$sql= "INSERT INTO mahasiswa VALUES('$nim','$nama','$fakultas','$prodi','$alamat','$no_telepon')";
	$data = $database->query($sql);
	header("tampil.php");
	} ?>
	<form method="post" action="">	
		<div class="container">
		<tr>				
				<td>nim :</td>
				<td><input class="form-control" type="text" name="nim"></td>
			</tr>
			<tr>				
				<td>nama :</td>
				<td><input class="form-control" type="text" name="nama"></td>
			</tr>					
			<tr>
				<td>fakultas :</td>
				<td><select class="form-control" name="fakultas">
					<option values ="FAKULTAS TEKHNIK">fakultas tekhnik</option>
					<option values ="FAKULTAS HUMANIORA">fakultas humaniora</option>
					<option values ="FAKULTAS PERTANIAN">fakultas pertanian</option>
				</select> 
 				</td>
			</tr>
			<tr>
			<td>prodi :</td>
				<td><select class="form-control" name="prodi">
					<option values ="INF">informatika</option>
					<option values ="SI">sistem informasi</option>
					<option values ="RSK">rekayasa sistem informasi</option>
				</select> 
 				</td>
			</tr>
			<tr>
				<td>alamat:</td>
				<td><textarea class="form-control" name="alamat" cols="30" rows="15"></textarea></td>
			</tr>
			<tr>
				<td>no_telepon</td>
				<td><input class="form-control" type="text" name = "no_telepon"></td>
			</tr>
			<tr>
				<tr colspan= "2" alighn= "center">
					<td><input class="btn btn-success" type="submit" name="simpan" value="simpan"></td>
					<td><input class="btn btn-primary" type="submit" name="cancel" value="reset"></td>
			</tr>
</div>
	</form>
	<table border="1" cellspacing="0" class="table">
				<tr>
					<td>nim</td>
					<td>nama</td>
					<td>fakultas</td>
					<td>prodi</td>
					<td>alamat</td>
					<td>no_telepon</td>
					<td>Opsi</td>
				</tr>


<?php
	$sql= "SELECT * FROM mahasiswa";
	$data = $database->query($sql);
?>

<?php if ($data->num_rows > 0) {
		// jika data benar
		while($row = $data->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['fakultas']; ?></td>
					<td><?php echo $row['prodi']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['no_telepon']; ?></td>
					<td><a class="btn btn-danger" href="delete.php?nim=<?php echo"$row[nim]";?>">Delete</td>
				</tr>
			
	<?php 	}?>
	</table>
	<?php } else {
		// jika data salah
		echo "data kosong";
	} ?>
