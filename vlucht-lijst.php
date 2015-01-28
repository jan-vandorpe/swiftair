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
				border-collapse:collapse;
	}
	table td {
		border:3px solid #F4ECE3;
		background-color:#DDE6CC;

	}
	</style>
</head>
<body>
	<h1>Vluchtlijst</h1>

	<table>
		<thead>
			<td>Vluchtcode</td>
			<td>Vertrek</td>
			<td>Aankomst</td>
			<td>Uur vertrek</td>
			<td>Uur aankomst</td>
		</thead>
	<tbody>
	<?php 
	// foreach ($resultSet as $rij) {
	for ($i=0;$i<20;$i++) {
	?>
		<tr>
			<td><?php print("FR" . (5993 + $i) ); ?></td>
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
</body>
</html>




