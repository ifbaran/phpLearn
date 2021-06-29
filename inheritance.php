<?php

    declare(strict_types=1);
    class ParentClass
    {

        function __construct()
        {
            echo("Parent constructor");
        }
    }

    class ChildClass extends ParentClass
    {
        
        function __construct()
        {
            echo("Child constructor<br>");
        }

        function getParent()
        {
            $parent = new ParentClass();
        }
    }
    
    $child = new ChildClass(); // Function goes to ChildClass constructor.
    $child->getParent(); // When call the function ChildClass instance from ParentClass and goes to ParentClass's constructor.

    class Rectangle 
    {
        private int $width, $height;

        public function __construct(int $_width, int $_height)
        {
            $this->width = $_width;
            $this->height = $_height;
        }
        function getArea():int //return type of class
        {
            return $this->width * $this->height;
        }
    }

    class Square extends Rectangle
    {
        function __construct($_width)
        {
            parent::__construct($_width, $_width);
        }
    }

    $square = new Square(12);
    echo "<br>".(string)$square->getArea();


    class ObjectAccess
    {
        private int $privateValue;

        function setPrivate($obj, $val)
        {   
            $obj->privateValue = $val;
        }

    }

    $obj1 = new ObjectAccess();
    $obj2 = new ObjectAccess();
    $obj1->setPrivate($obj2,44);
    // echo (string)$obj2->privateValue; // Returns error because of private member. 
