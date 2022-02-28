<?php
try{

$idb=$_GET['idb'];
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("delete from bloc where idbloc=?");
$requete->execute([$idb]);
header("location:listebloc.php?m=b");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'un operateur" .$e->getMessage() ;
    header("location:listemachine.php?m=ok");
    } 
?>