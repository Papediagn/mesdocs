<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $requete = $dbh->prepare("select * from operateurs");
    $requete->execute();
    $operateur = $requete->fetchAll();
} catch (PDOException $e) {
    echo "Erreur" . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des operateurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-8 mx-auto">
    <div class="row">
        <?php if (isset($_GET['m']) && $_GET['m'] == 'ok') { ?>
            <div class="alert alert-danger alert-dismissible fade show text-center col-md-12" role="alert">
                <!-- Impossible de supprimer ce client, car il est déjà utilisé dans des factures! -->
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php } ?>
        <?php if (isset($_GET['m']) && $_GET['m'] == 'b') { ?>
            <div class="alert alert-success text-center col-md-12">
                Le client a été supprimé avec succès!
            </div>

        <?php } ?>
        <table class="table table-tripped" id="operateur">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($operateur as $op) { ?>
                    <tr>
                        <th scope="row"><?= $op['idoperateur'] ?></th>
                        <td><?= $op['prenom'] ?></td>
                        <td><?= $op['nom'] ?></td>
                        <td><?= $op['telephone'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous supprimer?')" href="delete.php?idop=<?= $op['idoperateur'] ?>"><i class="fas fa-trash"></i></a>
                            <a class="btn btn-sm btn-success" onclick="return confirm('Voulez vous modifier?')" href="edit.php?idop=<?= $op['idoperateur'] ?>"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>