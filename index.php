<!-- Consegna 
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php

use JetBrains\PhpStorm\Language;

class Movie {
    public $title;
    public $genre;
    public $language;
    public $yearProduction;

    function __construct($_dataMovies)
    {
        
     echo $this ->title = $_dataMovies['title'] . '<br>';  
     echo $this -> genre = $_dataMovies['genre'] . '<br>';
     echo $this -> language = $_dataMovies['language'] . '<br>';
     echo $this -> yearProduction = $_dataMovies['yearProduction'] . '<br>'; 
     
    }

    // questa funzione permette di calcolare la differenza di anni tra la data produzione e la data odierna
    public function getPublishMovie($yearPublish) {

        $yearDifferent = date_diff(date_create($yearPublish), date_create());

        return $yearDifferent -> y;
    }
} 

$firstFilm = new Movie([
    "title" => "Harry Potter",
    "genre" => "Fantasy",
    "language" => "ita", 
    "yearProduction" => "2001-01-01"
]);
    echo '<p>Il film è stato pubblicato' . ' ' . $firstFilm -> getPublishMovie("2001-01-01") . ' ' . 'anni fa' . '</p>' . '<br>';

$secondFilm = new Movie([
    "title" => "Io sono leggenda",
    "genre" => "Azione",
    "language" => "ita", 
    "yearProduction" => "2007-01-01"
]);
    echo '<p>Il film è stato pubblicato' . ' ' . $secondFilm -> getPublishMovie("2007-01-01") . ' ' . 'anni fa' . '</p>' . '<br>';

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

<?php


?>
    
</body>
</html>