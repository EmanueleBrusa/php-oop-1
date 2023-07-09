<?php
    //creo una classe con le sue istanze
    class Movie {
        public $title;
        public $genre;
        public $rating;

        //creo un costruttore
        public function __construct($title, $genre, $rating){
            $this->title = $title;
            $this->genre = $genre;
            $this->rating = $rating;
        }

        //creo un metodo
        //public function {

        //}
    }


    //creo due oggetti movie
    $movie1 = new Movie ("Il Signore degli Anelli", "Fantasy", 9.9);
    $movie2 = new Movie ("Inception", "Thriller", 8.7);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>
<body>
    
</body>
</html>