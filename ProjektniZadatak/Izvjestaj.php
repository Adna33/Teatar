<?php
require('./fpdf/fpdf.php');
class IZVJESTAJ extends FPDF
{
    function Header()
    {
        $this->SetFont('Times', 'B', 18);
        $this->Cell(50, 20, 'Lista Komentara', 0, 20);
    }
}
$file = new IZVJESTAJ();
$file->AddPage();
$file->SetFont('Times','',12);
   //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
$rezultat = $dbh->query("SELECT ime, komentar FROM utisak");

foreach ($rezultat as $u) {
     $file->Write(5,$u['ime']. PHP_EOL); 
    $file->Write(5,$u['komentar']. PHP_EOL);   
     $file->Write(5,' ' . PHP_EOL); 
}

$file->Output();

?>