<?php
try {

    $designation = $_POST['designation'];
    $numero = $_POST['numero'];
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    $epaisseur = $_POST['epaisseur'];
    $quantite = $_POST['quantite'];
    $idbloc = $_POST['idbloc'];
    //connexion a la base de donnee
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("insert into tranches (designation,numero,longueur,largeur,epaisseur,quantite,idbloc) values(?,?,?,?,?,?,?)");
    $requete->execute([$designation,$numero,$longueur,$largeur,$epaisseur,$quantite,$idbloc]);
    // print_r($_POST);
     header("location:tranche.php?m=ok");
} catch (PDOException $e) {
   
     echo "Erreur d'ajout d'une d'une tranche".$e->getMessage();

}
header("location:tranche.php?m=ok");
?>