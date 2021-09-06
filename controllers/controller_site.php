<?php
/**
 * INCLUDES
 */
include("models/model_site.php");

/**
 * Appelée par la route /index.php
 * 
 * Affiche la liste des films
 */
function index(){
    $titre = "Liste de films!";

    $films = getFilms();

    include("views/view_index.php");
}

