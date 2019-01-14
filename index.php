<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "eleves_infos";



//connecter
$conn= NEW mysqli($servername,$username,$password);

//verifier qu il n y a pas d'erreur de connection:
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);//interrompt l'execution du script (pas conseillé, mettre message d erreur ou autre chose)
}
else
{
// Selectionner la base à utiliser
    $conn->select_db($dbname);//le "->" sert a acceder aux donnees objet en php
}



