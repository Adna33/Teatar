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
    $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $ime=$_POST['firstname'];
    $komentar=$_POST['komentar'];
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
   ));}
}
}
?>