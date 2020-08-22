<!DOCTYPE html>
<html>
<head>
    <title>Accueil myPostcrossing</title>
    <!-- CSS PERSO><-->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!-- CSS BOOTSTRAP><-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
</head>

<body>
<div id="global">
    <div id="contenu">
        <?= $contenu ?>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-6 text-right">
                <a id="btn-page-envoyees" href="index.php?type=envoyees" class="button">Cartes Envoyées</a>
            </div>
            <div class="col-6 text-left">
                <a id="btn-page-reçues" href="index.php?type=recues" class="button">Cartes Reçues</a>
            </div>
        </div>
        <a id="btn-page-admin" href="index.php?type=admin" class="button">Espace Admin</a>
        <a id="btn-page-home" href="index.php?type=home" class="button">Accueil</a>
    </div>
</div>

<!-- JS BOOTSTRAP><-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
