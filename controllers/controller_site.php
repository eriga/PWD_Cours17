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

/**
 * Appelée par la route /ajout.php
 * 
 * Affiche le formulaire d'ajout d'un film
 */
function ajouterFilm(){
    include("views/view_ajout.php");
}

/**
 * Appelée par la route /ajoutSubmit.php
 * 
 * Traite les informations reçues du 
 * formulaire
 */
function ajouterFilmSubmit() {
    $titre = $_POST["titre"];
    $date = $_POST["date"];

    $succes = ajoutFilm($titre, $date);

    // Succès: redirection vers index.php
    if($succes) {
        header("location:index.php");
        exit();

    // Erreur: redirection au formulaire
    } else {
        header("location:ajout.php?erreur=1");
        exit();
    }

}

