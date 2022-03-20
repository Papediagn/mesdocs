<?php
try {

    $nom = $_POST['nom'];
    $idoperateur = $_POST['idoperateur'];
    //connexion a la base de donnee
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("insert into machine (nom,idoperateur) values(?,?)");
    $requete->execute([$nom,$idoperateur]);
    header("location:machine.php?m=ok");
} catch (PDOException $e) {
   header("location:machine.php?m=ok");
    echo "Erreur d'ajout d'une d'une machine";
}
?>