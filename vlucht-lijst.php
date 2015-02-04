<?php

// $resultSet = array();

// $resultSet["vluchtcode"] = "FR 5993";
// $resultSet["vertrek"] = "Madrid";
// $resultSet["aankomst"] = "Londen Stansted";
// $resultSet["uurA"] = "06:05";
// $resultSet["uurV"] = "07:40";



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Vluchtlijst</title>
	<style>
	table {
				
	}
	table td {
		border:3px solid #F4ECE3;
		background-color: #BFEBF2;

	}
	</style>
</head>
<body>
	<h1>Vluchtlijst</h1>
<form>
	<table style="width:100%;border-collapse:collapse;">
		<thead>
			<td><b>Vluchtcode</b></td>
			<td><b>Vertrek</b></td>
			<td><b>Aankomst</b></td>
			<td><b>Uur vertrek</b></td>
			<td><b>Uur aankomst</b></td>
		</thead>
	<tbody>
	<?php 
	// foreach ($resultSet as $rij) {
	for ($i=0;$i<20;$i++) {
	?>
		<tr>
			<td><?php print("<input type='radio' name='vlucht' value=' . (5993 + $i) . '>FR" . (5993 + $i) ); ?></td>
			<td><?php print("Madrid"); ?></td>
			<td><?php print("Londen Stansted"); ?></td>
			<td><?php print((04 + $i) . ":05"); ?></td>
			<td><?php print((05 + $i) . ":40"); ?></td>
		</tr>
	<?php
	}
	?>
	</tbody>
	</table>
</form>
</body>
</html>




