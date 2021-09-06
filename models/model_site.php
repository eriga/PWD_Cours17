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

/**
 * Insère un film
 */
function ajoutFilm($titre, $date){
    global $bdd;

    $sql = "INSERT INTO films
                (titre2, date)
            VALUES
                ('$titre', '$date')
            ";

    return mysqli_query($bdd, $sql);    
}
