<?php
//parent class
abstract class Car {
    public $name;
    public function_contruct ($name) {
        $this->name = $name;
    }
    abstract public function intro();
}

//child classes
class Audi extends Car {
    public function intro() {
        return "choose German quality! I'm an $this->name!";
    }
}

class volvo extends Car {
    public function intro () {
        return "pround to be swedish! I'm a $this->name!";
    }
}

class citroen extends Car {
    public function intro () {
        return "French extravagance! I'm a $this->name!";
    }
}
?>