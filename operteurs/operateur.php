<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container col-md-8">
        <div class="col-md-8 mx-auto border mt-3 p-3">
            <form action="store.php" method="POST">
            <div class="mb-3 text-info text-center border mt-3">
                    <h1>Ajouter un Operateur</h1>
                </div>
                <div class="mb-3">
                    Nom:<input type="text" name="nom" class="form-control">
                </div>
                <div class="mb-3">
                    Prenom:<input type="text" name="prenom" class="form-control">
                </div>
                <div class="mb-3">
                    Telephone:<input type="text" name="telephone" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>