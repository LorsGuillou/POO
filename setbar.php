<?php

require_once ("./utilisateur.php");
require_once ("./playlist.php");

class Setbar extends Playlist {
    private string $chansonEnCours;
    private float $dureeChanson;
    private bool $boutonMarche;
    private bool $boutonStop;
    private bool $boutonSon;

    function __construct(string $chansonEnCours, float $dureeChanson, bool $boutonMarche, bool $boutonStop, bool$boutonSon)
    {
        $this->chansonEnCours = $chansonEnCours;
        $this->dureeChanson = $dureeChanson;
        $this->boutonMarche = $boutonMarche;
        $this->boutonStop = $boutonStop;
        $this->boutonSon = $boutonSon;
    }
    function mettreMarche()
    {
        if ($boutonMarche = true && ($nomArtiste = true || $nomChanson = true)) 
        {
            $boutonMarche = false;
            echo "Vous ecoutez " . $nomArtiste . "-" . $nomChanson;
        } 
        elseif ($boutonMarche = true) 
        {
            $boutonMarche = false;
            echo "Vous écoutez une chanson aléatoirement";
        }
    }
    function mettreStop( $boutonStop = true) 
    {
        $boutonMarche = false;
        $nomArtiste = false;
        $nomArtiste = false;

    }
    function augmenterSon($gestionSon)
    {
        if  ($gestionSon < 100 && $boutonSon = true )
        {
            $gestionSon++;
        } 
        elseif ($gestionSon > 100 && $boutonSon = true )
        {
            $gestionSon = 100;
            echo "Vous voulez être sourd ?!";
        } 
        elseif ($gestionSon < 100 && $boutonSon = false )
        {
            $gestionSon--;
        }
        elseif ($gestionSon = 0 && $boutonSon = false )
        {
            echo "Quit calm, je suis déjà au minimum";
        }
    }
    function passer($boutonPasser)
    {
        if ($boutonPasser = true)
        {
            $playlist++;
        }
    }
}