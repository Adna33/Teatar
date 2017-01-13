<?php 
 $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
 $rezultat = $dbh->query("SELECT glas FROM anketa");
                       
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="Glasovi.csv"');
$fp = fopen('php://output', 'w');

foreach ($rezultat as $u) {
    $glas = explode(",", $u['glas']);
    fputcsv($fp, $glas);  
   
}
fclose($fp);


?>
