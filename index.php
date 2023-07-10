<?php
    class Genre {
        public $name;

        public function __costruct($name){
            $this->name = $name;
        }
    }
    //creo una classe con le sue istanze
    class Movie {
        public $title;
        public $year;
        public $genre;
        public $length;
        public $rating;

        //creo un costruttore
        public function __construct($title, $year, Genre $genre, $length){
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
            $this->length = $length;
        }

        //creo un metodo
        public function getMovieDetails(){
            $string = "Movie: ".$this->title.", Genre: ".$this->genre.", Year: ".$this->year.", Length: ".$this->length;

            if($this->rating != NULL){
                $string.= ", Rating: ".$this->rating;
            }

            return $string;
        }
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
    <!--bootstrap-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>oop</title>
</head>
<body>
    
</body>
</html>