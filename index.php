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

    public function getHtml(){
        return '<h1>name movie: ' . $this->title . '</h1>'
            . '<h2> movie genre: ' . $this->genre . '</h2>'
            . '<h3> cast: ' . $this-> cast . '</h3>'
            . '<h3> duration: ' . $this->duration . '</h3>'
            . '<h3> anno: ' . $this -> year . '</3>'
            ;
    }
}

$avengers = new Movie('Avengers', 'fantasy','robert d. junior', '3h', 2019);
$avatar = new Movie('Avatar', 'fantasy',' drobert. junior', '3,5h', 2022);

$movies = [
    $avengers,
    $avatar
];

foreach($movies as $movie){
    echo $movie->getHtml();

}
