<?php 
if(isset($_POST['anketaSubmit'])){
$msg = "";
if(!isset($_POST['anketa'])) {
    $msg="Nije chekirana nijedna opcija!";
}
if(empty($msg)){
$xmldoc  = "rezultatiAnkete.xml";
if(!file_exists($xmldoc)){ 
if($fp=fopen("rezultatiAnkete.xml",'w+')){
fwrite($fp,"<?xml version='1.0' ?>". PHP_EOL);
fwrite($fp,"<ankete>" . PHP_EOL);
fwrite($fp,"<anketa>" . PHP_EOL);
fwrite($fp,'<glas>'.$_POST['anketa']."</glas>". PHP_EOL);
fwrite($fp,"</anketa>" . PHP_EOL);
fwrite($fp,"</ankete>");
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je kreiran!";
}else{
$msg =  "Greska!";
}
}else{if($fp=fopen("rezultatiAnkete.xml",'r+')){
fseek($fp, -10, SEEK_END);
fwrite($fp,"<anketa>" . PHP_EOL);
fwrite($fp,'<glas>'.$_POST['anketa']."</glas>". PHP_EOL);
fwrite($fp,"</anketa>" . PHP_EOL);
fwrite($fp,"</ankete>");
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je update-ovan!";        
    }
else {$msg = "Fajl je vec kreiran!";}
}
}
}
?>