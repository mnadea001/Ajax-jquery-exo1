<?php

// Connexion a la BDD
$mysqli = @new mysqli("localhost", "root", "", "entreprise");

// Si une erreur survient lors de la connexion a la BDD, on stoppe le script et on affiche le message
if($mysqli -> connect_error){
    die("Un probleme est survenu lors de la tentative de connexion a la BDD: " . $mysqli->connect_error);
}
