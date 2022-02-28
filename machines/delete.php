<?php
try{

$idm=$_GET['idm'];
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("delete from machine where idmachine=?");
$requete->execute([$idm]);
header("location:listemachine.php?m=b");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'un operateur" .$e->getMessage() ;
    header("location:listemachine.php?m=ok");
    } 
?>