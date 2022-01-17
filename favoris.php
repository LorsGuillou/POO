<?php

class Favoris {
    private string $genre;
    private string $nomArtiste;
    private string $nomChanson;
    private string $dateAjout;

    function __construct(string $genre, string $nomArtiste,  string $nomChanson, string $dateAjout) 
    {
        $this->genre = $genre;
        $this->nomArtiste = $nomArtiste;
        $this->nomChanson = $nomChanson;
        $this->dateAjout = $dateAjout;
    }
    function ecouterFavoris($ecouterFavoris)
    {
        if ( $nomArtiste = true || $nomChanson = true) 
        {
            "vous venez de lancer " . $nomArtiste . "-" . $nomChanson;
            
        } elseif ( $ecouterFavoris = true && $nomArtiste = false || $nomChanson = false) 
        {
            "Vous venez de lancer vos favoris en aléatoire";
        }

    }
    function retirerFavoris()
    {
        if ( $nomChanson = false) 
        {
            echo "Vous venez de retirer " . $nomChanson . " de vos favoris !";
        }
    }
}