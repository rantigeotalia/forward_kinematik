<!DOCTYPE html>
<html>
<head>
	<title>FORWARD 2 DOF</title>
</head>
<style type="text/css">
	th, td {
  padding: 5px;
	}
</style>
<body>
	<h3>FORWARD 2 DOF</h3>
	<h4>Inputkan nilai-nilai !</h4>
	<form action="" method="post" name="form2">
	<table>
		<tr>
			<th></th>
			<th><img src="assets/img/2-dof.png"></th>
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
			<th>Sudut 1 </th>
			<th><input type="number" name="sudut1" required></th>
		</tr>
		<tr>
			<th>Sudut 2</th>
			<th><input type="number" name="sudut2" required></th>
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
				$sudut1 = $_POST['sudut1'];
				$sudut2 = $_POST['sudut2'];

				$add_sin = sin(deg2rad($sudut1)) * cos(deg2rad($sudut2)) + cos(deg2rad($sudut1)) * sin(deg2rad($sudut2));
				$add_cos = cos(deg2rad($sudut1)) * cos(deg2rad($sudut2)) - sin(deg2rad($sudut1)) * sin(deg2rad($sudut2));
				$x = $L1 * cos(deg2rad($sudut1)) + $L2 * $add_cos;
				$y = $L1 * sin(deg2rad($sudut1)) + $L2 * $add_sin;

				echo "L1 = $L1 , L2 = $L2 , Sudut 1 = $sudut1 , Sudut 2 = $sudut2 <br>";
				echo "Nilai X adalah ". round($x,3) ."<br>"; 
				echo "Nilai Y adalah " .round($y,3) ."<br>";
			}

		?>
	<br>
	<a href="index.html">Kembali</a>
</body>
</html>