<?php
// Consegna 
// - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


class Movie
{
    public $image_album;
    public $title;
    public $genre;
    public $language;
    public $yearProduction;
    public $valutazione;

    function __construct(array $_dataMovies)
    {
        $this->image_album = $_dataMovies["image_album"];
        $this->title = $_dataMovies['title'];
        $this->genre = $_dataMovies['genre'];
        $this->language = $_dataMovies['language'];
        $this->yearProduction = $_dataMovies['yearProduction'];
        $this->valutazione = $_dataMovies["valutazione"];
    }

    // questa funzione permette di calcolare la differenza di anni tra la data produzione e la data odierna
    public function getPublishMovie($yearPublish)
    {
        $yearDifferent = date_diff(date_create($yearPublish), date_create());
        return $yearDifferent->y;
    }

    // public function printMovie() {
        
    // }
}

// importo tutte le instanze 
include __DIR__ . '/db/db.php';

// '<p>Il film è stato pubblicato' . ' ' . $secondFilm->getPublishMovie("2007-01-01") . ' ' . 'anni fa' . '</p>' . '<br>';

// creo un array delle istanze dei film cosi da ciclarli nell'array

$HarryPotterMovies = [
    $harryPotter_1,
    $harryPotter_2,
    $harryPotter_3,
    $harryPotter_4,
    $harryPotter_5,
    $harryPotter_6,
    $harryPotter_7,
    $harryPotter_8
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="title">Lista film</h1>
        <div class="content-card">

            <?php foreach ($HarryPotterMovies as $key => $value) {
                // $value -> printMovie();
                echo '<div class="card">';
                foreach ($value as $keyMovie => $valueMovie) {
                    if ($keyMovie === "image_album") {
                        echo '<img src="' . $valueMovie . '" alt="">';
                    } else {
                        echo '<p><strong>' . ucfirst($keyMovie) . '</strong>' . ':' . $valueMovie;
                    }
                }
                echo '</div>';
            } ?>
        </div>
    </div>


    </div>


</body>

</html>