<!DOCTYPE html>
<html>
<head>
	<title>INVERS 1 DOF</title>
</head>
<style type="text/css">
	th, td {
  padding: 5px;
	}
</style>
<body>
	<h3>INVERS 1 DOF</h3>
	<h4>Inputkan nilai-nilai !</h4>
	<form action="" method="post" name="form1">
	<table>
		<tr>
			<th></th>
			<th><img src="1-dof.png"></th>
		</tr>
		<tr>
			<th>L</th>
			<th><input type="number" name="sisi_miring" required></th>
		</tr>
		<tr>
			<th>Titik X </th>
			<th><input type="number" name="titik_x" step="0.001" required></th>
		</tr>
		<tr>
			<th>Titik Y </th>
			<th><input type="number" name="titik_y" step="0.001" required></th>
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
				$titik_x = $_POST['titik_x'];
				$titik_y = $_POST['titik_y'];

 
				$sudut = atan2($titik_x, $titik_y);
				$rad = rad2deg($sudut);
				echo "L = $sisi_miring , titik x = $titik_x , titik y = $titik_y <br>";
				echo "Nilai sudut adalah ". round($rad) ."<br>"; 

				
			}

		?>
	<br>
	<a href="index.html">Kembali</a>
</body>
</html>