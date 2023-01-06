<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengisian krs</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<form method="post" action="simpan_krs.php">
		<table width="427">
			<tr>
				<td>nim</td>
				<td><input type="text" name="nim"/></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nim"/></td>
			</tr>
			<tr>
				<td colspan="2">daftar mata kulaih yang ada</td>
			</tr>
			<?php
			$mata_kuliah= array("pembukuan 2","akutansi","sistem pakar","basis data","akutansi 2");
			for ($i=0; $i <count ($mata_kuliah);  $i++){ 
			 	// code...
			 
			 ?>
			<tr>
				<td colspan="2">
				<input type="checkbox" name="mata_kuliah" id="mata_kulaih[]" value="<?php echo $mata_kuliah[$i]; ?>" />
				<<?php echo $mata_kuliah[$i]; ?></td>		
			</tr>
			<<?php }?>
			<tr>
				<td><input name="ok" type="submit" id="ok" value="proses"/></td>
			</tr>
		</tr></table>
	</form>
</div>
</body>
</html>