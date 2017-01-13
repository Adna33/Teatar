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
    $imePredstave=$_POST['imePr'];
    $danPredstave=$_POST['danPr'];
    $opisPredstave=$_POST['opisPr'];   
       //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
    $sql = $dbh->prepare("SELECT COUNT(id) AS broj FROM predstava WHERE ime= :imeP");
    $sql->bindParam(':imeP', $imePredstave);
    $sql->execute();
    $row=$sql->fetch(PDO::FETCH_ASSOC);
    if ($row['broj']==0){
    $sql = $dbh->prepare("INSERT INTO `predstava`  (`ime`, `dan`,`opis`) VALUES (?, ?, ?)");
    $sql->execute(array(
    $imePredstave,
        $danPredstave,
        $opisPredstave
   ));} 
    
}
}
?>