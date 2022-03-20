<?php
try {

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    //connexion a la base de donnee
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("insert into operateurs (prenom,nom,telephone) values(?,?,?)");
    $requete->execute([$prenom, $nom, $telephone]);
    header("location:operateur.php?m=ok");
} catch (PDOException $e) {
   header("location:operateur.php?m=ok");
    echo "Erreur d'ajout d'un operateur";
}
?>