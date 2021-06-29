<?php

    declare(strict_types = 1);

    //Nullable Types
    function nullOrInt(?int $value)
    {
        return $value === null ? "null" : $value; 
        // This is like if-else. Before the "?" is "if" condition so after the "?" operator is result of "if" statement and after the ":" result of else. 
    }


    //Union Types
    function squared(int|float $value):int|float
    {
        return $value**2;
    }

    echo (string)squared(4)."<br>";

    class MyType
    {
        public int $a; // uninitialized
        public $b; // null
        
    }

    