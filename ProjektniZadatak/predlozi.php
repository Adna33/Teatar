<?php
$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
$rezultat = $dbh->query("SELECT ime, dan, opis FROM predstava");
       
$j=0;

$q=$_GET["q"];
if (strlen($q)>0) {
  $predlog="";
  foreach ($rezultat as $u)  {
            
      if (stristr($u['ime'],$q) || stristr($u['dan'],$q)) {
          $j=$j+1;
        if ($predlog=="") {
                    
            if(stristr($u['ime'],$q)){
                $predlog=$predlog .$u['ime'];
            }
            else{$predlog=$predlog .$u['dan'];}
         
        } else {
            if(stristr($u['ime'],$q)){
                $predlog=$predlog . "<br />".$u['ime'];
            }
            else{$predlog=$predlog . "<br />".$u['dan'];}
          
        }
      }
        if($j==10)break;
    
  }
}
if ($predlog!="") {
   $tekst=$predlog;
} else {
$tekst="Nema predloga";
 
}

echo $tekst;
?>