<?php
$vertrek = "BRU";
$aankomst = "BER";
$vliegtuigid = 1;
// $vertrekmoment = "2010-01-30 10:00:00";
$aankomstmoment = new DateTime("2010-01-30 12:00:00");
$vertrekmoment = new DateTime('2010-01-30 00:00:00');
$aantalDagen = 10;
$aantalOpEenDag = 3;
// print_r($vertrekmoment);
// // $vertrekmoment->add(new DateInterval('P10D'));
// date_add($vertrekmoment, date_interval_create_from_date_string('10 hours'));
// print_r($vertrekmoment);


$dbh = New PDO("mysql:localhost;dbname=swiftair","swiftair",123456);

for ($i=0;$i<$aantalDagen;$i++) {

//	for($j=1;$j<=$aantalOpEenDag;$j++) {
//		date_add($vertrekmoment, date_interval_create_from_date_string(( 6) . ' hours'));
//		$vertrekString = $vertrekmoment->format('Y-m-d H:i:s');
//		$aankomstString = $aankomstmoment->format('Y-m-d H:i:s');
// 		$sql = "INSERT INTO `vluchten`(`vertrekhavenid`, `aankomsthavenid`, `vliegtuigid`, `vertrekdatum`, `aankomstdatum`) VALUES ('".$vertrek."','".$aankomst."','".$vliegtuigid."','".($vertrekString)."','".$aankomstString."')";
// 		print ($sql."<br>");
// 		$dbh->exec($sql);
// 		if ($j==$aantalOpEenDag) {
// 			date_add($vertrekmoment, date_interval_create_from_date_string('-18 hours'));
// 		}
//	}
//	date_add($vertrekmoment, date_interval_create_from_date_string(( 1) . ' days'));
}
        $query = "SELECT * FROM vluchten LIMIT 1";
        $result = $dbh->query($query);
        print($result['id']);
$dbh = null;




// $dbh->exec($sql);


// BRU BER 1 2010-01-30 10:00:00 2010-01-30 12:00:00

?>