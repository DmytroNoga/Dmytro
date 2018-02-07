<?php
/*class Test{
    public $name;
    public function __construct($name) {
       $this->name = $name;
    }
    public function __toString() {
        return $this->name;
    }
}
$class = new Test(1);
var_dump($class);
die();*/

class Machine {
	public $name;
	public $model;
	public $price;
	public $maxpassagers;

	public function __construct($name, $model, $price, $maxpassagers) {
		$this->name = $name;
		$this->model = $model;
		$this->price = $price;
		$this->maxpassagers = $maxpassagers;
	}

	public function __toString() {
		return $this->name;
		return $this->model;
		return $this->price;
		return $this->maxpassagers;
	}
}
class Cars extends Machine {

}

class Bus extends Machine {
	
}

class Moto extends Machine {

}

$product1 = new Cars('WV', 'B5', 12, 4);
var_dump($product1);
echo '<br>';
die();
?>