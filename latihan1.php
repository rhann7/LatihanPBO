<?php
    class Mobil {
        public $name, $color, $type, $owner;

        function setData($name, $color, $type, $owner) {
            $this->name = $name;
            $this->color = $color;
            $this->type = $type;
            $this->owner = $owner;
        }

        function getData() {
            echo "======================" . "<br>" . "Car : " . $this->name . "<br>" . "Color : " . $this->color . "<br>" . "Type : " . $this->type . "<br>" . "Owner : " . $this->owner . "<br>" . "======================";
        }
    }

    $value_name = new Mobil();
    $value_name->setData("Supra", "Black", "MK4", "Smokey Nagata");
    $value_name->getData();