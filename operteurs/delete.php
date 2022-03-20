<?php
try{

$idop=$_GET['idop'];
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("delete from operateurs where idoperateur=?");
$requete->execute([$idop]);
header("location:listeoperateur.php?m=b");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'un operateur" .$e->getMessage() ;
    header("location:listeoperateur.php?m=ok");
    } 
?>