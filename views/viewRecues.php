<div class="row">
    <div class="col-4">
        <div class="container-card d-flex flex-wrap">
            <p class="title">Choissisez une carte postale :</p>
            <?php
            foreach ($cartes as $key => $variable) {
                print("<a class='link-show-card' onclick='showCard(\"" . $cartes[$key]['id'] . "\",\"" . $cartes[$key]['city'] . "\",\"" . $cartes[$key]['country'] . "\",\"" . $cartes[$key]['lat'] . "\",\"" . $cartes[$key]['lng'] . "\",\"" . $cartes[$key]['img'] . "\",\"" . $cartes[$key]['date'] . "\")'><img src='./img/card1.png' class='btn-show-card' alt='carte postale'/></a>");
            }
            ?>
        </div>
    </div>
    <div class="col-8">
        <div id="cardDetail">
            <!-- ici "happend" infos carte>-->
        </div>
    </div>
</div>
