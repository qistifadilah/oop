<?php
    require_once 'animal.php';
    class Ape extends Animal
    {
        public $legs = 2 . "<br>";
        public function yell()
        {
            echo "Yell : auooo <br>";
        }
    }
?>