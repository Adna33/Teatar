<?php 
$rezultati = new SimpleXMLElement("rezultatiAnkete.xml",null,true);
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="Glasovi.csv"');
$fp = fopen('php://output', 'w');
foreach ($rezultati->anketa as $ank) {
    $glas = explode(",", $ank->glas);
    fputcsv($fp, $glas);  
   
}
fclose($fp);


?>
