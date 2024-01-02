<?php

class Animal {
    public function makeSound() {
        return "Generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Creating instances of the classes
$genericAnimal = new Animal();
$dog = new Dog();
$cat = new Cat();

// Calling the makeSound method on each object
echo $genericAnimal->makeSound() . "<br>"; // Output: Generic animal sound
echo $dog->makeSound() . "<br>"; // Output: Woof! Woof!
echo $cat->makeSound() . "<br>"; // Output: Meow!
?>