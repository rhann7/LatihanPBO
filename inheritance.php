<?php
    // Class Parent
    class fruit {
        public $name, $color, $flavour;

        function __construct($name, $color, $flavour) {
            $this->name = $name;
            $this->color = $color;
            $this->flavour = $flavour;
        }

        function getData() {
            echo
                "\n",
                "[1] Fruit Name    : " . $this->name . "\n",
                "[2] Fruit Color   : " . $this->color . "\n",
                "[3] Fruit Flavour : " . $this->flavour . "\n\n";
        }
    }

    // Class Child
    class strawberry extends fruit {
        public function message() {
            echo "\n[!] Am I a berry or not?";
        }
    }

    $value = new strawberry("Strawberry", "Red", "Sweet");
    $value->message();
    $value->getData();