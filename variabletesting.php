<?php
    declare(strict_types = 1);

    // isset: isset is a function what the function check any variable is setted or not.
    if(isset($a))
    {
        echo "true";
    }
    else
    {
        echo "false";
    }

    echo "<br>";

    //empty: empty is a function what the function check any variable is empty or not.
    if(empty($a))
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
    
    echo "<br>";

    $a = 1;
    //is_null: is_null is a function what the function check any variable is null or not.
    if(is_null($a))
    {
        echo "true";
    }
    else
    {
        echo "false";
    }

    echo "<br>";

    //unset: unset is a function what the function unsetting a variable.
    unset($a);
    if(!isset($a)) // "!" operator mean "NOT" !isset => it means is not set 
    {
        echo "true";
    }
    else
    {
        echo "false";
    }

    echo "<br>";

    //Nullsafe Operator

    class MyObject
    {
        public function myMethod()
        {
            echo "My Method";
        }
    }

    $obj = null;
    $result = $obj?->myMethod(); // nothing

    $obj = new MyObject();
    $result = $obj->myMethod(); // "My Method"