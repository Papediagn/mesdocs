<?php
try {
    //connexion a la base de donnee
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("select * from machine order by idmachine");
    $requete->execute();
    $bloc = $requete->fetchAll();
} catch (PDOException $e) {
    echo "Erreur d'ajout d'une machine";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container col-md-8">
        <div class="col-md-8 mx-auto border mt-3 p-3">
            <form action="store.php" method="POST">
                <div class="mb-3 text-info text-center border mt-3">
                    <h1>Ajouter un Bloc</h1>
                </div>
                <div class="mb-3">
                    Désignation:<input type="text" name="designation" class="form-control">
                </div>
                <div class="mb-3">
                    Numero:<input type="text" name="numero" class="form-control">
                </div>
                <div class="mb-3">
                    Longueur:<input type="text" name="longueur" class="form-control">
                </div>
                <div class="mb-3">
                    Largeur:<input type="text" name="largeur" class="form-control">
                </div>
                <div class="mb-3">
                    Hauteur:<input type="text" name="hauteur" class="form-control">
                </div>
                <div class="mb-3">
                    Tonnage:<input type="text" name="tonnage" class="form-control">
                </div>
                <div class="mb-3">
                    Date d'entrée:<input type="text" name="date_entrer" class="form-control">
                </div>
                <div class="mb-3">
                    Heure d'entrer :<input type="text" name="heure_entrer" class="form-control">
                </div>
                <div class="mb-3">
                    Date de sortie:<input type="text" name="date_sortie" class="form-control">
                </div>
                <div class="mb-3">
                    Heure de sortie:<input type="text" name="heure_sortie" class="form-control">
                </div>
                <div class="mb-3">
                    Machine:<select type="number" name="idmachine" class="form-control">
                        <option value="" selected>***</option>
                        <?php foreach ($bloc as $b) { ?>
                            <option value="<?= $b['idmachine'] ?>"> <?= $b['nom'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>