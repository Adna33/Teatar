<?php 
if(isset($_POST['submitPredstava'])){
$msg = "";
if(empty($_POST['imePr'])){
$msg .= "Unesite ime!<br>";
}
if(empty($_POST['danPr'])){
$msg .= "Unesite dan!<br>";
}
if(empty($_POST['opisPr'])){
$msg .= "Unesite opis!<br>";
}
if(empty($msg)){
$xmldoc  = "predstave.xml";
if(!file_exists($xmldoc)){ 
if($fp=fopen("predstave.xml",'w+')){
fwrite($fp,"<?xml version='1.0' ?>". PHP_EOL);
fwrite($fp,"<predstave>" . PHP_EOL);
fwrite($fp,"<predstava>" . PHP_EOL);
fwrite($fp,'<ime>'.$_POST['imePr']."</ime>". PHP_EOL);
fwrite($fp,'<dan>'.$_POST['danPr']."</dan>". PHP_EOL);
fwrite($fp,'<opis>'.$_POST['opisPr']."</opis>". PHP_EOL);
fwrite($fp,"</predstava>" . PHP_EOL);
fwrite($fp,"</predstave>");
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je kreiran!";
}else{
$msg =  "Greska!";
}
}else{
    if($fp=fopen("predstave.xml",'r+')){
        fseek($fp, -12, SEEK_END);        
fwrite($fp,"<predstava>" . PHP_EOL);
fwrite($fp,'<ime>'.$_POST['imePr']."</ime>". PHP_EOL);
fwrite($fp,'<dan>'.$_POST['danPr']."</dan>". PHP_EOL);
fwrite($fp,'<opis>'.$_POST['opisPr']."</opis>". PHP_EOL);
fwrite($fp,"</predstava>" . PHP_EOL);
fwrite($fp,"</predstave>");
fclose($fp);
$msg =  "XML dokumenat pod nazivom ".$xmldoc. " je update-ovan!";        
    }
else {$msg = "Fajl je vec kreiran!";}
}
}
}
?>