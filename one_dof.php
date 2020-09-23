<!DOCTYPE html>
<html>
<head>
	<title>FORWARD 1 DOF</title>
</head>
<style type="text/css">
	th, td {
  padding: 5px;
	}
</style>
<body>
	<h3>FORWARD 1 DOF</h3>
	<h4>Inputkan nilai-nilai !</h4>
	<form action="" method="post" name="form1">
	<table>
		<tr>
			<th></th>
			<th><img src="assets/img/1-dof.png"></th>
		</tr>
		<tr>
			<th>L</th>
			<th><input type="number" name="sisi_miring" required></th>
		</tr>
		<tr>
			<th>Sudut </th>
			<th><input type="number" name="sudut" required></th>
		</tr>
		<tr>
			<th></th>
			<th><input type="submit" name="submit" value="Hitung"></th>
		</tr>
	</table>
	</form>
		<?php
			if(isset($_POST['submit'])){
				$sisi_miring = $_POST['sisi_miring'];
				$sudut = $_POST['sudut'];
 
				$x = $sisi_miring*sin(deg2rad($sudut));
				$y = $sisi_miring*cos(deg2rad($sudut));

				echo "L = $sisi_miring dan Sudut = $sudut <br>";
				echo "Nilai X adalah ". round($x,3) ."<br>"; 
				echo "Nilai Y adalah " .round($y,3) ."<br>";
			}

		?>
	<br>
	<a href="index.html">Kembali</a>
</body>
</html>