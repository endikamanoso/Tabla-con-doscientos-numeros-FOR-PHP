<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>tablas</title>
	<style>
		table{
			width: 100%;
			border: 3px black solid;
		}
		td{
			border: 3px black solid;
		}
	</style>
</head>
<body>
	<?php
	$contador=1;
		echo "<table>";
		for ($i=1; $i <200 ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <=5 ; $j++) { 
				echo "<td>$contador</td>";
				$contador++;
			}
			echo "</tr>";
		}
		echo "</table>";
	  ?>
</body>
</html>