<?php
class MyClass {
    protected $protectedProperty = 'Protected Property';

    protected function protectedMethod() {
        return 'Protected Method';
    }
}

class MyDerivedClass extends MyClass {
    public function accessProtected() {
        echo $this->protectedProperty.'<br>'; // Accessing protected property from the derived class
        echo $this->protectedMethod(); // Accessing protected method from the derived class
    }
}

class ProtecProperty {
    protected $name;

    protected function __construct($n) {
        $this->name = $n;
    }

    public static function createInstance($n) {
        return new self($n);
    }

    // public function get() {
    //     echo $this->name;
    // }

    public function getName() {
        return $this->name;
    }
}

$obj = new MyDerivedClass();
echo $obj->accessProtected();

echo"<br>";

$instance = ProtecProperty::createInstance("Example Name");
echo $instance->getName();