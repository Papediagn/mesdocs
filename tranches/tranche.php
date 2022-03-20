<?php
try {

    //connexion a la base de donnee
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("select * from bloc order by idbloc");
    $requete->execute();
    $tranche = $requete->fetchAll();
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
    <title>Tranches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container col-md-8">
        <div class="col-md-8 mx-auto border mt-3 p-3">
            <form action="store.php" method="POST">
                <div class="mb-3 text-info text-center border mt-3">
                    <h1>Ajouter une Machine</h1>
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
                    Epaisseur:<input type="text" name="epaisseur" class="form-control">
                </div>
                <div class="mb-3">
                    Quatite:<input type="number" name="quantite" class="form-control">
                </div>
                <div class="mb-3">
                    Bloc:<select type="number" name="idbloc" class="form-control">
                        <option value="" selected>***</option>
                        <?php foreach ($tranche as $t) { ?>
                            <option value="<?= $t['idbloc'] ?>"> <?= $t['numero'] ?>  <?= $t['designation'] ?></option>
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