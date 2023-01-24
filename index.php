<?php

class Movie{
    public $title;
    public $genre;
    public $cast;
    public $duration;

    public function __construct($title, $genre, $cast, $duration)
    {
        $this->title =$title;
        $this->genre =$genre;
        $this->cast =$cast;
        $this->duration = $duration;
    }

    public function getHtml(){
        return '<h1>name movie: ' . $this->title . '</h1>'
            . '<h2> movie genre: ' . $this->genre . '</h2>'
            . '<h3> cast: ' . $this-> cast . '</h3>'
            . '<h3> duration: ' . $this->duration . '</h3>'
            ;
    }
}

$movie1 = new Movie('Avengers', 'fantasy','robert d. junior', '3h');

var_dump($movie1);

echo $movie1->getHtml();