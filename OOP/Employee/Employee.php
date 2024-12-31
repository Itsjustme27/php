<?php 
	class Employee {
		protected $name;
		protected $age;
		protected $address;

		public function __construct($name, $age, $address) {
			$this->name = $name;
			$this->age=  $age;
			$this->address = $address;
		}
	}

	class Tour extends Employee {
		private $canGoToTour;

		function displayCanGoToTour() {
			if($this->age > 20) {
				$canGoToTour = "True";
			}
			echo $canGoToTour;
		}

	}

	$obj1 = new Tour("Jotaro","25", "Kathmandu");
	
	$tour = $obj1->displayCanGoToTour();
	echo $tour. "\n";
?>
