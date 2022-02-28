<?php
try {

    $designation = $_POST['designation'];
    $numero = $_POST['numero'];
    $longueur = $_POST['longueur'];
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];
    $tonnage = $_POST['tonnage'];
    $date_entrer = $_POST['date_entrer'];
    $heure_entrer = $_POST['heure_entrer'];
    $date_sortie = $_POST['date_sortie'];
    $heure_sortie = $_POST['heure_sortie'];
    $idmachine = $_POST['idmachine'];

    //connexion a la base de donnee
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("insert into bloc (designation,numero,longueur,largeur,hauteur,tonnage,date_entrer,heure_entrer,date_sortie,heure_sortie,idmachine) values(?,?,?,?,?,?,?,?,?,?,?)");
    $requete->execute([$designation, $numero, $longueur,$largeur,$hauteur,$tonnage,$date_entrer,$heure_entrer,$date_sortie,$heure_sortie,$idmachine]);
    header("location:bloc.php?m=ok");
} catch (PDOException $e) {
   header("location:bloc.php?m=ok");
    echo "Erreur d'ajout d'un operateur";
}
?>