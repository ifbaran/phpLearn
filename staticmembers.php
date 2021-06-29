<?php
    declare(strict_types = 1);

    class StaticExample
    {
        public $r = 10;     //radius
        static $pi = 3.14;  // pi 

        function getArea()
        {
            return self::newArea($this->r);
        }

        static function newArea($a)
        {
            return self::$pi * $a * $a;
            return StaticExample::$pi * $a * $a; // Alternative syntax
        }
    }

    echo (string)StaticExample::$pi."<br>";
    echo (string)StaticExample::newArea(10)."<br>";

    //Late Static Binding

    class ParentClass
    {
        protected static $value = "Parent";

        public static function getValue()
        {
            return self::$value;
        }

    }

    class ChildClass extends ParentClass{
        protected static $value = "Child";
    }
    echo ChildClass::getValue()."<br>"; // The output is "Parent" because of we used static members and we return with "self" keyword.
    //---------------------------------------------------------------------------------------------------------------------------------

    class PParentClass
    {
        protected static $value = "Parent";

        public static function getLateBindingValue()
        {
            return static::$value;
        }
    }

    class CChildClass extends PParentClass 
    {
        protected static $value = "Child";
    }

    echo CChildClass::getLateBindingValue(); // The output is "Child" because of we return with "static" keyword.