<?php
    class Animals {
        public $name, $color;
        
        public function __construct($name, $color) {
            echo "[1] Name of Animal : " . $this->name = $name . "\n";
            echo "[2] Color of Animal : " . $this->color = $color . "\n";
        }
    }

    class Herbivora extends Animals {
        public function FoodType() {
            echo "[!] Eat Plants";
        }
    }

    class Karnivora extends Animals {
        public function FoodType() {
            echo "[!] Eat Beef";
        }
    }

    class Omnivora extends Animals {
        public function FoodType() {
            echo "[!] Eat Anything";
        }
    }

    $value1 = new Herbivora("Cow", "White");
    $value1->FoodType();
    echo "\n";
    echo "\n";
    $value2 = new Karnivora("Lion", "Orange");
    $value2->FoodType();
    echo "\n";
    echo "\n";
    $value2 = new Omnivora("Rats", "Black");
    $value2->FoodType();