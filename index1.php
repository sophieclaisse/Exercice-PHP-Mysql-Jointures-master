<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 10/01/2019
 * Time: 10:37
 */

include "index.php";



function afficher()
{
    global $conn;
    $selection = "SELECT eleves.*, eleves_informations.*  from eleves, eleves_informations where eleves_informations.eleves_id= eleves.id"; //SLECTION DE TRUCS A AFFICHER
    $sel = $conn->query($selection);

    while ($row = $sel->fetch_assoc()) { //ASSOCIER POUR AFFICHER
        echo "ID = " . $row['id']." - PRENOM = " . $row['prenom'] . " - NOM = " . $row['nom'] ." - AGE = " . $row['age'] ." - VILLE = " . $row['ville'] ." - AVATAR = " . $row['avatar'] ."<br><br>";
    }
}
afficher();
