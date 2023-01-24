<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

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


                return '<h1>' . $this->title . '</h1>'
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
                'Robert Downey Jr., Chris Evans', 
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
    ?>
</head>
<body>
    <div class="container">

        <h1> FILM </h1>
        <?php
          foreach($movies as $movie){
              echo '<div class="movie">';
                $newMovie = new Movie($movie[0], $movie[1], $movie[2], $movie[3], $movie[4]);
                echo $newMovie->getHtml();
                echo '</div>';
            }
        ?>
    </div>

</body>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        display:flex;
        flex-direction: column;
        align-items: center;

        background-color: antiquewhite;
        width: 100%;
        height: 100vh;
        padding-top:50px;
    }
    .movie{
        border:1px solid black;
        border-radius: 25px;
        padding:20px;
        margin-bottom: 20px;
    }
</style>
</html>