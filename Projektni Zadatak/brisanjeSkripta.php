<?php
if(isset($_POST['submitUtiskaDel'])){
$msg = "";
$num= (int)$_POST['brUtiskaDel']; 
if(empty($msg)){

$rezultati = new SimpleXMLElement("komentar.xml",null,true);
unset($rezultati->utisak[$num-1]);
$rezultati->asXML("komentar.xml");
}}
if(isset($_POST['submitPreplateDel'])){
$msg = "";

if(empty($msg)){

$num= (int)$_POST['brPreplateDel']; 
$rezultati = new SimpleXMLElement("preplate.xml",null,true);
unset($rezultati->preplata[$num-1]);
$rezultati->asXML("preplate.xml");
}}
if(isset($_POST['submitGlasaDel'])){
$msg = "";
$num= (int)$_POST['brGlasaDel'];
if(empty($msg)){
print "ENTER";
$rezultati = new SimpleXMLElement("rezultatiAnkete.xml",null,true);
unset($rezultati->anketa[$num-1]);
$rezultati->asXML("rezultatiAnkete.xml");
}}
?>