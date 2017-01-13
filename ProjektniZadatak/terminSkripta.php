<?php 
if(isset($_POST['submitTermin'])){
$msg = "";
if(empty($_POST['termin'])){
$msg .= "Unesite termin!<br>";
}
if(empty($_POST['terminPredstava'])){
$msg .= "Unesite predstavu!<br>";
}
if(empty($msg)){
       //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
    $vrijeme=$_POST['termin'];
    $predstavaT=$_POST['terminPredstava'];
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
     
    ));}
}
}
?>