<!DOCTYPE html>
<html>
<head>
	<title>INVERS 2 DOF</title>
</head>
<style type="text/css">
	th, td {
  padding: 5px;
	}
</style>
<body>
	<h3>INVERSE 2 DOF</h3>
	<h4>Inputkan nilai-nilai !</h4>
	<form action="" method="post" name="form2">
	<table>
		<tr>
			<th></th>
			<th><img src="2-dof.png"></th>
		</tr>
		<tr>
			<th>L1</th>
			<th><input type="number" name="L1" required></th>
		</tr>
		<tr>
			<th>L2</th>
			<th><input type="number" name="L2" required></th>
		</tr>
		<tr>
			<th>Titik X </th>
			<th><input type="number" name="titik_x" step="0.001" required></th>
		</tr>
		<tr>
			<th>Titik Y</th>
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
				$L1 = $_POST['L1'];
				$L2 = $_POST['L2'];
				$titik_x = $_POST['titik_x'];
				$titik_y = $_POST['titik_y'];

				$cos_O2 = (pow($titik_x,2) + pow($titik_y,2) - pow($L1,2) - pow($L2,2))/2*$L1*$L2;

				$sin_O = abs(1-(pow($cos_O2,2)));
				$sin_O2 = pow($sin_O,1/2);

				$k1 = $L1 + $L2 * $cos_O2;
				$k2 = $L2 * $sin_O2;

				$teta2 = atan2($cos_O2,$sin_O2);
				$rad_teta2 = rad2deg($teta2);

				$tann1 = atan2($titik_y, $titik_x);
				$tann2 = atan2($k2,$k1);
				$teta1 = $tann1 - $tann2;

				$rad_teta1 = rad2deg($teta1);
			
				echo "L1 = $L1 , L2 = $L2 , titik x = $titik_x , Titik Y = $titik_y <br>";
				echo "Sudut 1 = ". round($rad_teta1,2) ." dan Sudut 2 = ". round($rad_teta2,2) ;



			}

		?>
	<br>
	<a href="index.html">Kembali</a>
</body>
</html>