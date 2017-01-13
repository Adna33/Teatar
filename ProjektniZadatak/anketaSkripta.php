<?php 
if(isset($_POST['anketaSubmit'])){
$msg = "";
if(!isset($_POST['anketa'])) {
    $msg="Nije chekirana nijedna opcija!";
}
if(empty($msg)){
    //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');

    $glas=$_POST['anketa'];    
    
    #glasovi se smiju o
    $sql = $dbh->prepare("INSERT INTO `anketa` (`glas`) VALUES (?)");
    $sql->execute(array(
     $glas
    ));
}
}
?>