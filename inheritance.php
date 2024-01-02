<?php
class ParentClass{
    public $name,$age;
    function show()
    {
        echo $this->name;
    }
}

class ChildClass extends ParentClass{

}
$obj1 = new ChildClass();
$obj1->name = 'Aryan';
$obj1->show();
?>