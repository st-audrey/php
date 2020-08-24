<!-- Pour toutes les cartes envoyees enregistrées dans la bdd, générer :
un bouton avec l'id de la carte,
une image de la carte, recto/verso
les infos (pays, ville..) voire des infos globale sur le pays et la ville voire la dernière news principale
une map de la ville
une map du pays
une map de la route parcourue par la carte
le nombre de cartes envoyées dans le même pays
la possibilité de voir sur une map toutes les cartes envoyées dans le meme pays ?-->
<?php
print("<table border=\"1\">");

foreach ($cartes as $key => $variable)
{
    print("<tr>");
    print("<td>".$cartes[$key]['country']."</td>");
    print("<td>".$cartes[$key]['city']."</td>");
    print("<td>".$cartes[$key]['lat']."</td>");
    print("<td>".$cartes[$key]['lng']."</td>");
    print("<tr>");
}

print("</table>");

?>
