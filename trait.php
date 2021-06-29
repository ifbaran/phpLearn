<?php 

    declare(strict_types = 1);

    trait PrintExample
    {
        public function printFunction()
        {
            echo "Hello <br>";
        }
    }

    class ClassExample
    {
        use PrintExample;
    }

    $print = new ClassExample();
    $print->printFunction(); // The output is "Hello"


    //Inheritance and Traits
    class ParentClass
    {
        public function printFunction()
        {
            echo "Parent Class";
        }
    }

    class ChildClass extends ParentClass
    {
        use PrintExample;
        
        public function printFunction()
        {
            echo "Child<br>";
        }
    }

    $child = new ChildClass();
    $child->printFunction(); // The output is "Child"