<?php
	require './Car.php';
	class Ford extends Car {
		public $name;
		public $price;
		public $model;

		public function __construct($name, $price, $model) {
			$this->name = $name;
			$this->price = $price;
			$this->model = $model;
		}

		public function getName() {
			return $this->name;
		}

		public function getPrice() {
			return $this->price;
		}

		public function getModel() {
			return $this->model;
		}
	}
	
	$fortuner = new Ford("fortuner", 1000, "x100");
	$name = $fortuner->getName();
	$price = $fortuner->getPrice();
	$model = $fortuner->getModel();
	
	echo "Car name : $name\n";
	echo "Car price: $price\n";
	echo "Car model: $model\n";

?>
