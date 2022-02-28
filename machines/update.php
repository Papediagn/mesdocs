<?php
try{
    $idm=$_POST['idmachine'];
    $nom=$_POST['nom'];   
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("update machine set nom=? where idmachine=?");
$requete->execute([$nom,$idm]);
header("location:listemachine.php");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'une machine" .$e->getMessage() ;
    //header("location:listeclient.php?m=ok");
    } 
?>