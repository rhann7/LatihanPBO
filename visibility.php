<?php
    class Car {
        public $brand;
        private $year;
        protected $model;
        
        public function __construct($brand, $model, $year) {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }
     
        public function getDetails() {
            echo "Brand: " . $this->brand . "\n";
            echo "Model: " . $this->model . "\n";
            echo "Year: " . $this->year . "\n";
        }

        private function getDetails2() {
            echo "Brand: " . $this->brand . "\n";
            echo "Model: " . $this->model . "\n";
            echo "Year: " . $this->year . "\n";
        }

        protected function getDetails3() {
            echo "Brand: " . $this->brand . "\n";
            echo "Model: " . $this->model . "\n";
            echo "Year: " . $this->year . "\n";
        }
    } 
     
    class SportsCar extends Car {
        public function showDetails() {
            echo "Brand: " . $this->brand . "\n";
            echo "Model: " . $this->model . "\n";
            echo "Year: " . $this->year . "\n";
        }
    }

    $car = new Car("Toyota", "Camry", "2021"); 
    $car->brand = "Honda";
    $car->model = "Accord";
    $car->year = "2022";     
    $sportsCar = new SportsCar("Ferrari", "488 GTB", "2020");
    $sportsCar->showDetails();