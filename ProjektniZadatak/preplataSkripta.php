<?php 

if(isset($_POST['submitPreplata'])){
$msg = "";
if(empty($_POST['ime'])){
$msg = "Unesite ime!<br>";
}
if(empty($_POST['prezime'])){
$msg = "Unesite prezime!<br>";
}
if(empty($_POST['telefon'])){
$msg = "Unesite telefon!<br>";
}
if(empty($_POST['mail'])){
$msg = "Unesite mail!<br>";
}
if(!(preg_match("@[0-9]{3}[-][0-9]{3}[-][0-9]{3}@", $_POST['telefon']))){

    $msg="Unesite ispravan mail!<br>";
}
if(!(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))){

    $msg="Unesite ispravan mail!<br>";
}
if (!(isset($_POST['preplatacheck'])))
{$msg = "Nije chekirana preplata!<br>";}
if(empty($msg)){
   //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
    $name=$_POST['ime'];
    $lastname= $_POST['prezime'];    
    $telvar=$_POST['telefon'];
    $mailvar=$_POST['mail'];
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
   ));}
}
}
?>