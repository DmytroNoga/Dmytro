<?php
class Machine {
	public $name;
	public $model;
	public $price;
	public $maxpassagers;

	public function __construct($name, $model, $price,$maxpassagers) {
		$this->name = $name;
		$this->model = $model;
		$this->price = $price;
		$this->maxpassagers = $maxpassagers;
	}

	public function __toString() {
		return Mashine;
	}

}
class Cars extends Machine {
	public function __toString() {
		return Cars;
	}
}

class Bus extends Machine {
	public function __toString() {
		return Bus;
	}	
}

class Moto extends Machine {
	public function __toString() {
		return Moto;
	}
}

$product1 = new Cars('WV', 'B5', 12, 4);
$product2 = new Bus('Etalon', '100500', 3, 22);
$product3 = new Moto('Honda', 'Giorno', 5, 1);
echo '<br>'.$product1.'<br>';
var_dump($product1);
echo '<br>'.$product2.'<br>';
var_dump($product2);
echo '<br>'.$product3.'<br>';
var_dump($product3);
echo '<br>';
die();
?>
