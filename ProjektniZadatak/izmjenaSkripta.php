<?php
   //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
if(isset($_POST['submitUtiskaUp'])){
   
$msg = "";
$num= (int)$_POST['brUtiskaUp']; 
$i=$num . "";
if(empty($msg)){ 
  
    $ime=$_POST["imeUtiska" . $i];
    $komentar=$_POST["komentarUtiska" . $i];
    $preplatasql = $dbh->prepare("UPDATE `utisak` SET `ime`= :ime, `komentar`= :komentar WHERE `id` = :id");
    $preplatasql->bindParam(':ime', $ime);
    $preplatasql->bindParam(':komentar', $komentar);
    $preplatasql->bindParam(':id', $i);
    $preplatasql->execute();    

}}


if(isset($_POST['submitPreplateUp'])){
$msg = "";
$num= (int)$_POST['brPreplateUp']; 
$i=$num . "";
if(empty($msg)){
    
    $name=$_POST["ime" . $i];
    $lastname=$_POST["prezime" . $i];
    $telvar=$_POST["tel" . $i];
    $mailvar= $_POST["mail" . $i];       
    $tel = (string)$telvar; 
    $mail = (string)$mailvar;    
    $preplatasql = $dbh->prepare("UPDATE `preplata` SET `ime`= :ime, `prezime`= :prezime,`telefon`= :telefon, `mail`= :mail  WHERE `id` = :id");
    $preplatasql->bindParam(':ime', $name);
    $preplatasql->bindParam(':prezime', $lastname);
    $preplatasql->bindParam(':telefon', $tel);
    $preplatasql->bindParam(':mail', $mail);
    $preplatasql->bindParam(':id', $i);    
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);
    
}}


if(isset($_POST['submitGlasaUp'])){
$msg = "";
$num= (int)$_POST['brGlasaUp'];
$i=$num . "";

if(empty($msg)){
$dom = new DOMDocument;
$dom->load('rezultatiAnkete.xml');
$var="nazivGlasa" . $i;
if( !empty($_POST[$var])){
$izmjena = $_POST[$var];}
    else $izmjena = "nazivGlasa" . $i;
    
    $preplatasql = $dbh->prepare("UPDATE `anketa` SET `glas`= :glas WHERE `id` = :id");
    $preplatasql->bindParam(':glas', $izmjena);
    $preplatasql->bindParam(':id', $i); 
    $preplatasql->execute();
    $row=$preplatasql->fetch(PDO::FETCH_ASSOC);


}}
?>