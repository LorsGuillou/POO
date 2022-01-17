<?php

require_once ("./favoris.php");
require_once ("./setbar.php");
require_once ("./playlist.php");
require_once ("./utilisateur.php");



$goutDamien = ["Rock", "Metal", "Jazz", "Blues"];

$bourvil = new Favoris ("Chanson Française", "Bourvil", "Le bal perdu", "14/01/2022");
$Damien = new Utilisateur (1, $goutDamien);



$nomArtiste = true;
