<?php

require_once ("./favoris.php");
require_once ("./setbar.php");
require_once ("./playlist.php");

class Utilisateur extends Favoris {
    private int $id;
    private array $gout;

    function __construct(int $id, array $gout)
    {
        $this->id = $id;
        $this->gout = $gout;
    }
    
    // function AccederFavoris()
    // {

    // }
}