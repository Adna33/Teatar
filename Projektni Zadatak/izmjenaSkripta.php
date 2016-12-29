<?php

if(isset($_POST['submitUtiskaUp'])){
   
$msg = "";
$num= (int)$_POST['brUtiskaUp']; 
$i=$num . "";
if(empty($msg)){
 
 $dom = new DOMDocument;
$dom->load('komentar.xml');
$imena = $dom->getElementsByTagName('name');
$komentari= $dom->getElementsByTagName('komentar');
$imena[$num-1]->nodeValue=$_POST["imeUtiska" . $i];
$komentari[$num-1]->nodeValue=$_POST["komentarUtiska" . $i];
file_put_contents('komentar.xml',$dom->saveXML());

}}


if(isset($_POST['submitPreplateUp'])){
$msg = "";
$num= (int)$_POST['brPreplateUp']; 
$i=$num . "";
if(empty($msg)){
    
 $dom = new DOMDocument;
$dom->load('preplate.xml');
    
$imena = $dom->getElementsByTagName('ime');
$prezimena= $dom->getElementsByTagName('prezime');
$telefoni= $dom->getElementsByTagName('telefon');
$mailovi= $dom->getElementsByTagName('mail');
$imena[$num-1]->nodeValue=$_POST["ime" . $i];
$prezimena[$num-1]->nodeValue=$_POST["prezime" . $i];
$telefoni[$num-1]->nodeValue=$_POST["tel" . $i];
$mailovi[$num-1]->nodeValue=$_POST["mail" . $i];
file_put_contents('preplate.xml',$dom->saveXML());
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

$glasovi = $dom->getElementsByTagName('glas');
$glasovi[$num-1]->nodeValue=$izmjena;

file_put_contents('rezultatiAnkete.xml',$dom->saveXML());
}}
?>