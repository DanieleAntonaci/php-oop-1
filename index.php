<?php

class Movie{
    public $title;
    public array $genre;
    public $cast;
    public $duration;
    public $year;

    public function __construct($title, array $genre, $cast, $duration, $year)
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

        $allgenre= implode(", ", $this->genre);


        return '<h1>name movie: ' . $this->title . '</h1>'
            . '<h2> movie genre: ' . $allgenre . '</h2>'
            . '<h3> cast: ' . $this-> cast . '</h3>'
            . '<h3> duration: ' . $this-> convertHour() . ' hour</h3>'
            . '<h3> anno: ' . $this -> year . '</3>'
            ;
    }
}


$movies = [
    [
        'Avengers: Endgame', 
        [
            'Fantasy',
            'Action',
            'Adventure'
        ],
        'Robert Downey Jr., 
        Chris Evans', 
        '181', 
        2019
    ],
    [
        'Avatar - La via dell`acqua', 
        [
            'Fantasy',
            'Action',
            'Adventure'
        ],
        'Sam Worthington', 
        '192', 
        2022
    ]
];



foreach($movies as $movie){
    $newMovie = new Movie($movie[0], $movie[1], $movie[2], $movie[3], $movie[4]);
    echo $newMovie->getHtml();
}
