<div class="row">
<!--Tableau des cartes envoyees-->
<h1 class="title">Vos cartes envoyées</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Latitude</th>
            <th scope="col">Longitude</th>
            <th scope="col">Image</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($cartesE as $key => $variable) {
    print("<tr>");
    print("<th scope='row'>1</th>");
    print("<td>" . $cartesE [$key]['id'] . "</td>");
    print("<td>" . $cartesE [$key]['city'] . "</td>");
    print("<td>" . $cartesE [$key]['country'] . "</td>");
    print("<td>" . $cartesE [$key]['lat'] . "</td>");
    print("<td>" . $cartesE [$key]['lng'] . "</td>");
    print("<td>" . $cartesE [$key]['img'] . "</td>");
    print("<td><a class='btn-delete-card' href='#'>x</a></td>");
    print("</tr>");
}
?>
    </tbody>
</table>
<a class="btn-page-admin" href="index.php?type=admin&action=addnewcard">Ajouter une carte</a>
</div>

<div class="row row-home">
<!--Tableau des cartes reçues-->
<h1 class="title">Vos cartes reçues</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">City</th>
        <th scope="col">Country</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Image</th>
        <th scope="col">Supprimer</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($cartesR as $key => $variable) {
    print("<tr>");
    print("<th scope='row'>1</th>");
    print("<td>" . $cartesR [$key]['id'] . "</td>");
    print("<td>" . $cartesR [$key]['city'] . "</td>");
    print("<td>" . $cartesR [$key]['country'] . "</td>");
    print("<td>" . $cartesR [$key]['lat'] . "</td>");
    print("<td>" . $cartesR [$key]['lng'] . "</td>");
    print("<td>" . $cartesR [$key]['img'] . "</td>");
    print("<td><a class='btn-delete-card' href='#'>x</a></td>");
    print("</tr>");
}
?>
    </tbody>
</table>
<a class="btn-page-admin" href="index.php?type=admin&action=addnewcard">Ajouter une carte</a>
</div>
