<?php 
if(isset($_POST['submitUtisak'])){
$msg = "";
if(empty($_POST['firstname'])){
$msg .= "Unesite ime!<br>";
}
if(empty($_POST['komentar'])){
$msg .= "Unesite Komentar!<br>";
}
if(empty($msg)){
$xmldoc  = "komentar.xml";
if(!file_exists($xmldoc)){ 
if($fp=fopen("komentar.xml",'w+')){
fwrite($fp,"<?xml version='1.0' ?>". PHP_EOL);
fwrite($fp,"<komentari>" . PHP_EOL);
fwrite($fp,"<utisak>" . PHP_EOL);
fwrite($fp,'<name>'.html_entity_decode($_POST['firstname'])."</name>". PHP_EOL);
fwrite($fp,'<komentar>'.html_entity_decode($_POST['komentar'])."</komentar>". PHP_EOL);
fwrite($fp,"</utisak>" . PHP_EOL);
fwrite($fp,"</komentari>");
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je kreiran!";
}else{
$msg =  "Greska!";
}
}else{
    if($fp=fopen("komentar.xml",'r+')){
    fseek($fp, -13, SEEK_END);
        fwrite($fp,"<utisak>". PHP_EOL);
fwrite($fp,'<name>'.$_POST['firstname']."</name>". PHP_EOL);
fwrite($fp,'<komentar>'.$_POST['komentar']."</komentar>". PHP_EOL);
fwrite($fp,"</utisak>". PHP_EOL);
fwrite($fp,"</komentari>");
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je update-ovan!";        
    }
else {$msg = "Fajl je vec kreiran!";}
}
}
}
?>