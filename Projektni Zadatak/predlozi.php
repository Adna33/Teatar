<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("predstave.xml");
$x=$xmlDoc->getElementsByTagName('predstava');
$j=0;

$q=$_GET["q"];
if (strlen($q)>0) {
  $predlog="";
  for($i=0; $i<($x->length); $i++) {
    $ime=$x->item($i)->getElementsByTagName('ime');
    $dan=$x->item($i)->getElementsByTagName('dan');
    $opis=$x->item($i)->getElementsByTagName('opis');  
    if ($ime->item(0)->nodeType==1) {
        
      if (stristr($ime->item(0)->childNodes->item(0)->nodeValue,$q) || stristr($dan->item(0)->childNodes->item(0)->nodeValue,$q)) {
          $j=$j+1;
        if ($predlog=="") {
                    
            if(stristr($ime->item(0)->childNodes->item(0)->nodeValue,$q)){
                $predlog=$predlog .$ime->item(0)->childNodes->item(0)->nodeValue;
            }
            else{$predlog=$predlog .$dan->item(0)->childNodes->item(0)->nodeValue;}
         
        } else {
            if(stristr($ime->item(0)->childNodes->item(0)->nodeValue,$q)){
                $predlog=$predlog . "<br />".$ime->item(0)->childNodes->item(0)->nodeValue;
            }
            else{$predlog=$predlog . "<br />".$dan->item(0)->childNodes->item(0)->nodeValue;}
          
        }
      }
        if($j==10)break;
    }
  }
}
if ($predlog!="") {
   $tekst=$predlog;
} else {
$tekst="Nema predloga";
 
}

echo $tekst;
?>