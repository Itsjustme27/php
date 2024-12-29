<?php
    class Car {
        public $name;
        public $price;

        public function __construct($name, $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName() {
            return $this->name;
        }

        public function getPrice() {
            return $this->price;
        }

        // public function setName($name) {
        //     $this->name = $name;
        // }

        // public function setPrice($price) {
        //     $this->price = $price;
        // }

    }

    // $toyota = new Car("Toyota", 5000000);
    // $toyota->setName("Toyota");
    // $toyota->setPrice(50055050);

    // $carName = $toyota->getName();
    // $carPrice = $toyota->getPrice();

    // echo "Car name: $carName \n";
    // echo "Car price: $carPrice \n";
    // $toyota->name = "Toyota";
    // $toyota->price = 1000000;

    // echo "Car name: $toyota->name \n";
    // echo "Car price: $toyota->price \n";
?>
