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
$rezultati = new SimpleXMLElement("komentar.xml",null,true);
foreach ($rezultati->utisak as $u) {
     $file->Write(5,$u->name. PHP_EOL); 
    $file->Write(5,$u->komentar. PHP_EOL);   
     $file->Write(5,' ' . PHP_EOL); 
}

$file->Output();

?>