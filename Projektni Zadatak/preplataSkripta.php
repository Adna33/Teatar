<?php 

if(isset($_POST['submitPreplata'])){
$msg = "";
if(empty($_POST['ime'])){
$msg = "Unesite ime!<br>";
}
if(empty($_POST['prezime'])){
$msg = "Unesite prezime!<br>";
}
if(empty($_POST['telefon'])){
$msg = "Unesite telefon!<br>";
}
if(empty($_POST['mail'])){
$msg = "Unesite mail!<br>";
}
if(!(preg_match("@[0-9]{3}[-][0-9]{3}[-][0-9]{3}@", $_POST['telefon']))){

    $msg="Unesite ispravan mail!<br>";
}
if(!(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))){

    $msg="Unesite ispravan mail!<br>";
}
if (!(isset($_POST['preplatacheck'])))
{$msg = "Nije chekirana preplata!<br>";}
if(empty($msg)){
$xmldoc  = "preplate.xml";
if(!file_exists($xmldoc)){ 
if($fp=fopen("preplate.xml",'w+')){
fwrite($fp,"<?xml version='1.0' ?>". PHP_EOL);
fwrite($fp,"<preplate>" . PHP_EOL);
fwrite($fp,"<preplata>" . PHP_EOL);
fwrite($fp,'<ime>'.html_entity_decode($_POST['ime'])."</ime>". PHP_EOL);
fwrite($fp,'<prezime>'.html_entity_decode($_POST['prezime'])."</prezime>". PHP_EOL);
    fwrite($fp,'<telefon>'.html_entity_decode($_POST['telefon'])."</telefon>". PHP_EOL);
    fwrite($fp,'<mail>'.html_entity_decode($_POST['mail'])."</mail>". PHP_EOL);
fwrite($fp,"</preplata>" . PHP_EOL);
fwrite($fp,"</preplate>" . PHP_EOL);
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je kreiran!";
}else{
$msg =  "Greska!";
}
}else{
    if($fp=fopen("preplate.xml",'r+')){
fseek($fp, -13, SEEK_END);
fwrite($fp,"<preplata>" . PHP_EOL);
fwrite($fp,'<ime>'.$_POST['ime']."</ime>". PHP_EOL);
fwrite($fp,'<prezime>'.$_POST['prezime']."</prezime>". PHP_EOL);
    fwrite($fp,'<telefon>'.$_POST['telefon']."</telefon>". PHP_EOL);
    fwrite($fp,'<mail>'.$_POST['mail']."</mail>". PHP_EOL);
fwrite($fp,"</preplata>" . PHP_EOL);

fwrite($fp,"</preplate>" . PHP_EOL);
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je update-ovan!";        
    }
else {$msg = "Fajl je vec kreiran!";}
}
}
}
?>