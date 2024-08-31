<?php
    class home {
        public $owner, $color, $type, $price;                   // Property

        function setData($owner, $color, $type, $price) {       // Mehtod
            $this->owner = $owner;
            $this->color = $color;
            $this->type = $type;
            $this->price = $price;
        }

        function getData() {
            return 
                "==============================\n" . 
                "Owner Name : " . $this->owner . "\n" . 
                "Home Color : " . $this->color . "\n" . 
                "Home Type : " . $this->type .  "\n" . 
                "Home Status : " . $this->homeStatus() . "\n" . 
                "Home Price : " . $this->price . "\n" .  
                "Description : " . $this->priceStatus() . "\n" . 
                "==============================";
        }

        function homeStatus() {
            if ($this->type >= 30) {
                return "Spacious House";
            } elseif ($this->type >= 20) {
                return "Normal House";
            } else {
                return "Too Small";
            }
        }

        function priceStatus() {
            switch ($this->price >= 500000000) {
                case 500000000:
                    return "Cheap";
                case 750000000:
                    return"Lil' Expensive";
                case 1000000000:
                    return "Expensive AF";
            }
        }
    }

    $value_home = new home();
    $value_home->setData("Handitya", "Gray", 36, 500000000);
    echo $value_home->getData();