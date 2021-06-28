<?php
    declare(strict_types=1);
    error_reporting(E_ALL ^ E_NOTICE); // Don't show notices on screen
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        //mixed type is anytype like var..
        $myNumber = 5; // int
        $text = "Text"; //string
        $trueFalse = true; //boolean
        $floatType = 4.5; //float
        $myArray = array(1, 2, 3); //array
        $myNull = null; //null

        $num1 = 3;
        $num2 = 4;
        echo "Helloworld ". (string)($num1 + $num2)."<br/>";

        $myDefined = null;
        $myUndefined = "hello";
        echo $myDefined . " " . $myUndefined . "<br>";

        $num2 **=5;
        echo $num2 . "<br>";
        
        $c = "world";
        echo "Hello $c <br>"; // Hello world
        echo 'Hello $c <br>'; // Hello $c

        $name = 'John';
        $s = <<<LABEL
        Hello $name 
        LABEL;
        echo $s; // "Hello John"

        //string functions

        $a = "String";
        $b = str_replace('i','o',$a); // Strong
        $b = substr_replace($a,'My ',0,0); // My String

        $arrayExample = ['one'=> 'a', 'two'=>'b', 'three' => 'c'];
        echo "<br>". $arrayExample['one'] . " " . $arrayExample['two']. " ". $arrayExample['three'] . "<br>"; //a b c

        if($a == "string"){
            echo "true<br>";   
        }
        else if ($a == "String"){
            echo "false<br>";
        }
        else {
            echo "logic err <br>";
        }

        //Alternative Syntax
        $myAlternativeExampleForIfElse1 = 4;
        $myAlternativeExampleForIfElse2 = 5;
        $myAlternativeIfElse = $myAlternativeExampleForIfElse1 = 4 ? true : false;
        echo (string)$myAlternativeIfElse. " it's mean true <br>"; // 1 it's mean true 
        sprintf()

        //Match Expression
        // $matchExpressionExample = '1';
        //     $output = match($matchExpressionExample) {
        //         1 => $output = 'integer',
        //         '1' => $output = 'string',
        //         default => 'Unknown'
        //     };
        // echo $output;

        for($i = 0; $i < 10; $i++){
            echo (string)$i."<br>";
        }

        //foreach loop
        $a = array('one' => 1, 'two' => 2);
        foreach ($a as $k => $v) {
         echo "$k = $v "; // "one = 1 two = 2 "
        }

        //Functions
        //Functions can call before the function definition! ! !
        foo();
        function foo(){
            echo "<br>foo";
        }

        // Optional parameters on functions !! 
        function helloFunction($firstVariable, $secondVariable = 'World'){
            echo "<br>".$firstVariable . " " . $secondVariable;
        }
        helloFunction("Hello","Moon");

        // Variable parameter lists
        function myArgs()
        {
         $x = func_get_arg(0);
         $y = func_get_arg(1);
         $z = func_get_arg(2);
         echo "<br>".$x . $y . $z;
        }
        myArgs('Fee', 'Fi', 'Fo'); // "FeeFiFo"

        //Global keyword in functions
        $x = 'Hello'; // global $x
        function myFunc()
        {
         global $x; // use global $x
         $x .= ' World'; // change global $x
        }
        myFunc();
        echo "<br>".$x;

        //Anonymous Function
        $say = function($name)
        {
         echo "<br>". "Hello " . $name;
        };
        $say("World"); // "Hello World"

        //Classes
        class Rectangle
        {
            private $x, $y;

            function newArea($a,$b){
                return $a * $b;
            }

            function getArea(){
                return $this->newArea($this->$x, $this->$y);
            }
        }
        $r = new Rectangle();
        $r->$x = 5;
        $r->$y = 5;
        $r->x = 5;
        $r->y = 5;
        $resultArea = $r->getArea();
        echo "<br>".(string)$resultArea;

        class MyRectangle{
            private $x, $y;

            function __construct($x, $y){
                $this->x = $x;
                $this->y = $y;
            }

            function getArea(){
                return $this->x * $this->y;
            }
        }
        $myRectangle = new MyRectangle(5, 22);
        echo "<br>". (string)$myRectangle->getArea();

        //Class Getter and Setter
        class Time{
            private $minutes;

            function getMinutes(){ return $this->minutes; }
            function setMinutes($val){ $this->minutes = $val; }
        }

        function add()
        {
         static $val = 0;
         echo "<br>" .$val++;
        }
        add(); //0
        add(); //1
        add(); //2
        
        //compile-time const
        const pi = 3.14;
        
        //Define it's means run time const
        define("one",1);
        define("two",2);
        define("three",3);

        echo "<br>".one;
        echo "<br>".two;
        echo "<br>".three;

        $var = null;
        if(!isset($var))
        {
         echo "<br>".'$var not set on line ' . __LINE__;
        }
    ?>
</body>
</html>
