<?php 
if(isset($_POST['submitKritika'])){
$msg = "";
if(empty($_POST['kritikaPredstava'])){
$msg .= "Unesite predstavu!<br>";
}
if(empty($_POST['opisKritika'])){
$msg .= "Unesite kritiku!<br>";
}

if(empty($msg)){ 
    $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $kritika=$_POST['opisKritika'];
    $predstava=$_POST['kritikaPredstava'];
    $sql = $dbh->prepare("SELECT COUNT(id) AS broj FROM kritika WHERE tekst= :tekst");
    $sql->bindParam(':tekst', $kritika);
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);
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
    ));}
}
}
?>