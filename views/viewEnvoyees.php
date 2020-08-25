
<div class="row">
    <div class="col-4">
            <?php
            foreach ($cartes as $key => $variable) {
                print("<a onclick='showCard(\"" . $cartes[$key]['id'] . "\",\"" . $cartes[$key]['city'] . "\",\"" . $cartes[$key]['country'] . "\",\"" . $cartes[$key]['lat'] . "\",\"" . $cartes[$key]['lng'] . "\",\"" . $cartes[$key]['img'] . "\",\"" . $cartes[$key]['date'] . "\")'><img src='./img/card1.png' class='btn-show-card' alt='carte postale'/></a>");
            }
            ?>
    </div>
    <div class="col-8">
        <div id="cardDetail">
            <!-- ici "happend" infos carte>-->
        </div>
    </div>
</div>

<!--<div id='map1'></div>
  <div id='map'></div>-->


