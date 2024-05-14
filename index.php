<?php

class Movie {
    public $name;
    public $year;
    public $type;

    public function __construct($_name, $_year, $_type) {
        $this->name = $_name;
        $this->year = $_year;
        $this->type = $_type;
    }

    public function getInfoMovie() {
        return $this->name . '' . $this->year. '' . $this->type;
    }

}

$matrix = new Movie("The Matrix", 1999, "Action");
$gladiatore = new Movie("Gladiator", 2000, "Drama");


echo $matrix->getInfoMovie();
echo $gladiatore->getInfoMovie();


?>