<?php
try{
    $idb=$_POST['idbloc'];
    $designation=$_POST['designation'];  
    $numero=$_POST['numero'];   
    $longueur=$_POST['longueur'];   
    $largeur=$_POST['largeur'];   
    $hauteur=$_POST['hauteur'];   
    $tonnage=$_POST['tonnage'];   
    $date_entrer=$_POST['date_entrer'];   
    $heure_entrer=$_POST['heure_entrer'];   
    $date_sortie=$_POST['date_sortie'];   
    $heure_sortie=$_POST['heure_sortie'];   
 
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("update bloc set designation=?,numero=?,longueur=?,largeur=?,hauteur=?,tonnage=?,date_entrer=?,heure_entrer=?,date_sortie=?,heure_sortie=? where idbloc=?");
$requete->execute([$designation,$numero,$longueur,$largeur,$hauteur,$tonnage,$date_entrer,$heure_entrer,$date_sortie,$heure_sortie,$idb]);
header("location:listebloc.php");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'une machine" .$e->getMessage() ;
    //header("location:listeclient.php?m=ok");
    } 
?>