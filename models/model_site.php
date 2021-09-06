<?php
/**
 * INCLUDES
 */
include("includes/bdd.php");

/**
 * Retourne tous les films
 */
function getFilms(){
    global $bdd;

    $sql = "SELECT id, titre, date
            FROM films
            ";
    
    $resultats = mysqli_query($bdd, $sql);

    return $resultats;
}
