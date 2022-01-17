<?php

class Playlist {
    private array $playlist;
    private float $duree;
    private string $genre;

    function __construct(array $playlist, float $duree, string $genre) {

        $this->playlist = $playlist;
        $this->duree = $duree;
        $this->genre = $genre;

    }
}