<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="form-group">
                    <label for="">Ajouter un animal</label>
                    <small id="espece" class="form-text text-muted">Espèce</small>
                    <input type="text" class="form-control" name="espece" aria-describedby="espece">
                    <small id="nom" class="form-text text-muted">Nom</small>
                    <input type="text" class="form-control" name="nom" aria-describedby="nom">
                    <small id="taille" class="form-text text-muted">Taille (en mètres)</small>
                    <input type="number" class="form-control" name="taille" aria-describedby="taille">
                    <small id="date_de_naissance" class="form-text text-muted">Date de naissance</small>
                    <input type="date" class="form-control" name="date_de_naissance" aria-describedby="date de naissance">
                    <small id="pays_origine" class="form-text text-muted">Pays d'origine</small>
                    <input type="text" class="form-control" name="pays_origine" aria-describedby="pays d'origine">
                    <small id="sexe" class="form-text text-muted">Sexe</small>
                    <select class="form-control" name="sexe" aria-describedby="sexe">
                        <option value="">--Please choose an option--</option>
                        <option value=2>Femelle</option>
                        <option value=1>Male</option>
                    </select>



                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>