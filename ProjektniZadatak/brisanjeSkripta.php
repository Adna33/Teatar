<?php
   //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');

if(isset($_POST['submitUtiskaDel'])){
$msg = "";
$num= (int)$_POST['brUtiskaDel']; 
if(empty($msg)){
    $sql = $dbh->prepare("DELETE FROM `utisak`  WHERE `id` = :id");
    $sql->bindParam(':id', $num); 
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);

}}


if(isset($_POST['submitPreplateDel'])){
$msg = "";

if(empty($msg)){

$num= (int)$_POST['brPreplateDel']; 
    $sql = $dbh->prepare("DELETE FROM `preplata`  WHERE `id` = :id");
    $sql->bindParam(':id', $num); 
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);
    
}}


if(isset($_POST['submitGlasaDel'])){
$msg = "";
$num= (int)$_POST['brGlasaDel'];
if(empty($msg)){
    
    $sql = $dbh->prepare("DELETE FROM `anketa`  WHERE `id` = :id");
    $sql->bindParam(':id', $num); 
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);
}}
?>