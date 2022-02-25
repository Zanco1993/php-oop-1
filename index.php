<!-- Consegna 
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php

class Movie {
    public $title;
    public $genre;
    public $language;
    public $yearProduction;

    function __construct($_title, $_genre, $_language, $_yearProduction)
    {
     echo $this ->title = $_title . '<br>';  
     echo $this -> genre = $_genre . '<br>';
     echo $this -> language = $_language . '<br>';
     echo $this -> yearProduction = $_yearProduction . '<br>'; 
    }
} 


$firstFilm = new Movie("Harry Potter", "Fantasy", "ita", "2001-01-01");
    

$secondFilm = new Movie("Io sono leggenda", "Azione", "ita", "2007-01-01");
    
        
    
    





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
    
</body>
</html>