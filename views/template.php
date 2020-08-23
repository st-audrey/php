<!DOCTYPE html>
<html>
<head>
    <title>Accueil myPostcrossing</title>
    <!-- CSS PERSO><-->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <!-- CSS google FONT><-->
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
    <!-- CSS BOOTSTRAP><-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
</head>

<body>
<div class="container-fluid">

    <header>
        <div class="container">
            <nav class="navbar navbar-light bg-white">
                <a class="navbar-brand title" href="index.php?type=home">
                    <img src="./img/logo.png" class="logo-site" alt="logo du site" loading="lazy">
                    myPostcrossing
                </a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div id="global">
            <div id="contenu">
                <?= $contenu ?>
            </div>
        </div>
    </div>


        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a class="footer-link" href="index.php?type=about">About<a/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#"><img class="logo" src="./img/facebook.png" alt="logo facebook"></a>
                    <a href="#"><img class="logo" src="./img/twitter.png" alt="logo twitter"></a>
                </div>
            </div>
        </div>


</div>

<!-- JS BOOTSTRAP><-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
