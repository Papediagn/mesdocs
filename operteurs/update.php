<?php
try{
    $idop=$_POST['idoperateur'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $telephone=$_POST['telephone'];
   
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("update operateurs set prenom=?,nom=?,telephone=? where idoperateur=?");
$requete->execute([$prenom,$nom,$telephone,$idop]);
header("location:listeoperateur.php");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'un operateur" .$e->getMessage() ;
    //header("location:listeclient.php?m=ok");
    } 
?>