<?php

class Movie{
    public $title;
    public $genre;
    public $cast;
    public $duration;
    public $year;

    public function __construct($title, $genre, $cast, $duration, $year)
    {
        $this->title =$title;
        $this->genre =$genre;
        $this->cast =$cast;
        $this->duration = $duration;
        $this->year = $year;
    }

    public function convertHour(){
        return intdiv($this->duration, 60).':'. ($this->duration % 60);
    }

    public function getHtml(){

        return '<h1>name movie: ' . $this->title . '</h1>'
            . '<h2> movie genre: ' . $this->genre . '</h2>'
            . '<h3> cast: ' . $this-> cast . '</h3>'
            . '<h3> duration: ' . $this-> convertHour() . '</h3>'
            . '<h3> anno: ' . $this -> year . '</3>'
            ;
    }
}

$movies = [
    $avengersEndGame = new Movie('Avengers: Endgame', 'fantasy','Robert Downey Jr., Chris Evans', '181', 2019),
    $avatar2 = new Movie('Avatar - La via dell`acqua', 'fantasy',' Sam Worthington:', '192', 2022)
];

foreach($movies as $movie){
    echo $movie->getHtml();

}
