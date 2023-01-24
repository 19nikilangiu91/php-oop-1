<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Oop-1</title>
</head>

<body>
    <?php
    // Definiamo una classe "Movie".
    class Movie
    {
        // all'interno della classe dichiariamo delle "variabili d'istanza".
        public $title;
        public $actors;
        public $director;
        public $genre;
        public $year;

        // all'interno della classe definiamo un "__construct".
        public function __construct($title, $actors, $director, $genre, $year)
        {
            $this->title = $title;
            $this->actors = $actors;
            $this->director = $director;
            $this->genre = $genre;
            $this->year = $year;
        }

        // all'interno della classe definiamo almeno un "Metodo"
        public function getAllInformation()
        {
            return "<div>
                        <h1>
                            Movie: '$this->title'<br>
                            Actors: '$this->actors'<br>
                            Director: '$this->director'<br>
                            Genre: '$this->genre'<br>
                            Year: '$this->year'<br>
                        </h1>
                    </div>";
        }
    }
    ?>

</body>

</html>