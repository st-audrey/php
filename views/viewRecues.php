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