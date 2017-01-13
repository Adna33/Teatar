<?php 
if(isset($_POST['unosBaza'])){
$msg = "";
if(empty($msg)){
       //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
    
    #za ankete
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("rezultatiAnkete.xml");
    $xmlObject = $xmlDoc->getElementsByTagName('anketa');
    $itemCount = $xmlObject->length;
    for ($i=0; $i < $itemCount; $i++){
    $glas = $xmlObject->item($i)->getElementsByTagName('glas')->item(0)->childNodes->item(0)->nodeValue;
    $preplatasql = $dbh->prepare("SELECT COUNT(id) AS broj FROM anketa WHERE glas= :glas");
    $preplatasql->bindParam(':glas', $glas);
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $sql = $dbh->prepare("INSERT INTO `anketa` (`glas`) VALUES (?)");
    $sql->execute(array(
     $glas
    ));}}
   
   
    
    #ovdje ide za komentare/utiske
    $komentarDoc = new DOMDocument();
    $komentarDoc->load("komentar.xml");
    $komxmlObject = $komentarDoc->getElementsByTagName('utisak');
    $komCount = $komxmlObject->length;
    for ($i=0; $i < $komCount; $i++){
    $ime = $komxmlObject->item($i)->getElementsByTagName('name')->item(0)->childNodes->item(0)->nodeValue;   
    $komentar = $komxmlObject->item($i)->getElementsByTagName('komentar')->item(0)->childNodes->item(0)->nodeValue; 
    $preplatasql = $dbh->prepare("SELECT COUNT(id) AS broj FROM utisak WHERE ime= :ime AND komentar= :komentar");
    $preplatasql->bindParam(':ime', $ime);
    $preplatasql->bindParam(':komentar', $komentar);
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $komsql = $dbh->prepare("INSERT INTO `utisak`  (`ime`, `komentar`) VALUES (?, ?)");
    $komsql->execute(array(
    $ime,
     $komentar
   ));}}
    
     #ovdje ide za preplate
    $preplataDoc = new DOMDocument();
    $preplataDoc->load("preplate.xml");
    $preplataxmlObject= $preplataDoc->getElementsByTagName('preplata');
    $preplataCount= $preplataxmlObject->length;
    for ($i=0; $i < $preplataCount; $i++){
    $name = $preplataxmlObject->item($i)->getElementsByTagName('ime')->item(0)->childNodes->item(0)->nodeValue; 
    $lastname = $preplataxmlObject->item($i)->getElementsByTagName('prezime')->item(0)->childNodes->item(0)->nodeValue;
    $telvar = $preplataxmlObject->item($i)->getElementsByTagName('telefon')->item(0)->childNodes->item(0)->nodeValue; 
    $mailvar = $preplataxmlObject->item($i)->getElementsByTagName('mail')->item(0)->childNodes->item(0)->nodeValue;  
    $tel = (string)$telvar; 
    $mail = (string)$mailvar;    
    #Nisu dozvoljene dvije preplate na isti mail
    $preplatasql = $dbh->prepare("SELECT COUNT(id) AS broj FROM preplata WHERE mail= :mail");
    $preplatasql->bindParam(':mail', $mail);
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $preplatasql = $dbh->prepare("INSERT INTO `preplata`  (`ime`, `prezime`, `telefon`, `mail`) VALUES (?, ?, ?, ?)");
    $preplatasql->execute(array(
    $name,
        $lastname,
        $tel,
        $mail
   ));} }
    
    #ovdje ide za predstave
    $predstavaDoc = new DOMDocument();
    $predstavaDoc->load("predstave.xml");
    $predstavaxmlObject= $predstavaDoc->getElementsByTagName('predstava');
    $predstavaCount= $predstavaxmlObject->length;
    for ($i=0; $i < $predstavaCount; $i++){
    $imePredstave = $predstavaxmlObject->item($i)->getElementsByTagName('ime')->item(0)->childNodes->item(0)->nodeValue; 
    $danPredstave = $predstavaxmlObject->item($i)->getElementsByTagName('dan')->item(0)->childNodes->item(0)->nodeValue;
    $opisPredstave = $predstavaxmlObject->item($i)->getElementsByTagName('opis')->item(0)->childNodes->item(0)->nodeValue; 
    #Nisu dozvoljene dvije predstave sa istim imenom
    $preplatasql = $dbh->prepare("SELECT COUNT(id) AS broj FROM predstava WHERE ime= :imeP");
    $preplatasql->bindParam(':imeP', $imePredstave);
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $preplatasql = $dbh->prepare("INSERT INTO `predstava`  (`ime`, `dan`,`opis`) VALUES (?, ?, ?)");
    $preplatasql->execute(array(
    $imePredstave,
        $danPredstave,
        $opisPredstave
   ));} }
    
    #ovdje ide za termine
    $terminDoc = new DOMDocument();
    $terminDoc->load("termini.xml");
    $terminObject = $terminDoc->getElementsByTagName('termin');
    $terminiCount = $terminObject->length;
    for ($i=0; $i < $terminiCount; $i++){
    $predstavaT = $terminObject->item($i)->getElementsByTagName('predstava')->item(0)->childNodes->item(0)->nodeValue;
    $vrijeme = $terminObject->item($i)->getElementsByTagName('vrijeme')->item(0)->childNodes->item(0)->nodeValue;   
    $query = $dbh->prepare("SELECT id AS kljuc FROM predstava WHERE ime= :imeP");
    $query->bindParam(':imeP', $predstavaT);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $predstavafk=$result['kljuc'];        
    $preplatasql = $dbh->prepare("SELECT COUNT(id) AS broj FROM raspored WHERE vrijeme= :vrijeme AND predstava= :predstava");
    $preplatasql->bindParam(':vrijeme', $vrijeme);
    $preplatasql->bindParam(':predstava', $predstavafk);
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $sql = $dbh->prepare("INSERT INTO `raspored` (`vrijeme`,`predstava`) VALUES (?, ?)");
    $sql->execute(array(
        $vrijeme,
        $predstavafk
     
    ));}}
    
    #ovdje ide za kritike
    $kritikeDoc = new DOMDocument();
    $kritikeDoc->load("kritike.xml");
    $kritikeObject = $kritikeDoc->getElementsByTagName('kritika');
    $kritikeCount = $kritikeObject->length;
    for ($i=0; $i < $kritikeCount; $i++){
    $predstava = $kritikeObject->item($i)->getElementsByTagName('ime')->item(0)->childNodes->item(0)->nodeValue;
    $kritika = $kritikeObject->item($i)->getElementsByTagName('opis')->item(0)->childNodes->item(0)->nodeValue;
    $preplatasql = $dbh->prepare("SELECT COUNT(id) AS broj FROM kritika WHERE tekst= :tekst");
    $preplatasql->bindParam(':tekst', $kritika);
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $query = $dbh->prepare("SELECT id AS kljuc FROM predstava WHERE ime= :imeP");
    $query->bindParam(':imeP', $predstava);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $predstavafk=$result['kljuc'];
    $sql = $dbh->prepare("INSERT INTO `kritika` (`predstava`,`tekst`) VALUES (?, ?)");
    $sql->execute(array(
        $predstavafk,
     $kritika
    ));}}
    
}
}
?>