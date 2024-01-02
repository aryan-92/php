<?php
    class Person{
        public $name;
        public $age;

        function __construct($n = 'No Name',$a = 0)
        {
            $this->name = $n;
            $this->age = $a;
        }

        function show(){
            echo $this->name.'-'.$this->age.'<br>';
        }
    }
    $obj = new Person('Aryan',32);
    $obj1 = new Person('Saswat',30);
    $obj2 = new Person();
    $obj->show();
    $obj1->show();
    $obj2->show();

    hgkhjhkjh
    jkjlljkljlkjljljasasasa
    asasasa
?>