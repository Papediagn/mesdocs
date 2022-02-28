<?php
try{

$idop=$_GET['idop'];
$dbh = new PDO('mysql:host=localhost;dbname=dbsorevet', "root", "root");
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$requete=$dbh->prepare("select * from operateurs where idoperateur=?");
$requete->execute([$idop]);
$operateur=$requete->fetch();
//var_dump($client);
//header("location:listeclient.php?m=b");
     }catch(PDOException $e){
    echo "Erreur de Suppression d'un client" .$e->getMessage() ;
    header("location:listeoperateur.php?m=ok");
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
                    <h1>Modifier un Operateur</h1>
                </div>
                <div class="mb-3">
                <input type="hidden" name="idoperateur"  class="form-control" value="<?=$operateur['idoperateur']?>">
                </div>
                <div class="mb-3">
                    Prénom: <input type="text" name="prenom" class="form-control" value="<?=$operateur['prenom']?>">
                </div>
                <div class="mb-3">
                    Nom: <input type="text" name="nom" class="form-control" value="<?=$operateur['nom']?>">
                </div>
                <div class="mb-3">
                    Téléphone: <input type="text" name="telephone" class="form-control" value="<?=$operateur['telephone']?>">
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