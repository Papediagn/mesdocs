<?php
try{

$idb=$_GET['idb'];
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("select * from bloc where idbloc=?");
$requete->execute([$idb]);
$bloc=$requete->fetch();
//var_dump($client);
//header("location:listeclient.php?m=b");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'une machine" .$e->getMessage() ;
    header("location:listebloc.php?m=ok");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto border mt-3 p-3">
            <form action="update.php" method="POST">
            <div class="mb-3 text-info text-center border mt-3">
                    <h1>Modifier un bloc</h1>
                </div>
                <div class="mb-3">
                <input type="hidden" name="idbloc"  class="form-control" value="<?=$bloc['idbloc']?>">
                </div>
                <div class="mb-3">
                    Désignation: <input type="text" name="designation" class="form-control" value="<?=$bloc['designation']?>">
                </div>
                <div class="mb-3">
                    Numero: <input type="text" name="numero" class="form-control" value="<?=$bloc['numero']?>">
                </div>
                <div class="mb-3">
                    Longueur: <input type="text" name="longueur" class="form-control" value="<?=$bloc['longueur']?>">
                </div>
                <div class="mb-3">
                    Largeur: <input type="text" name="largeur" class="form-control" value="<?=$bloc['largeur']?>">
                </div>
                <div class="mb-3">
                    Hauteur: <input type="text" name="hauteur" class="form-control" value="<?=$bloc['hauteur']?>">
                </div>
                <div class="mb-3">
                    Tonnage: <input type="text" name="tonnage" class="form-control" value="<?=$bloc['tonnage']?>">
                </div>
                <div class="mb-3">
                    Date d'entrée: <input type="text" name="date_entrer" class="form-control" value="<?=$bloc['date_entrer']?>">
                </div>
                <div class="mb-3">
                    Heure_entrer: <input type="text" name="heure_entrer" class="form-control" value="<?=$bloc['heure_entrer']?>">
                </div>
                <div class="mb-3">
                    Date sortie: <input type="text" name="date_sortie" class="form-control" value="<?=$bloc['date_sortie']?>">
                </div>
                <div class="mb-3">
                    Heure sortie: <input type="text" name="heure_sortie" class="form-control" value="<?=$bloc['heure_sortie']?>">
                </div>
                <div class="mb-3 text-center ">
                    <button class="btn btn-info col-md-6">Ajouter</button>

                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>