<?php 

    declare(strict_types = 1);

    class MyProperties
    {
        private $data = array();

        public function __set($name, $value)
        {
           
            $this->data[$name] = $value;
        }

        public function __get($name)
        {
            if (array_key_exists($name, $this->data)) {
                return $this->data[$name];
            }
        }
        
    }

    $object = new MyProperties();

    $object->a = "aaa";
    echo $object->a;

    echo "<br>";

    class MyClass
    {
        public function __call($name, $args)
        {
            return $args[0] * $args[1];
        }

    }
    
    echo (string)(new MyClass())->myTest(5,6);

    class MyStaticClass
    {
        public static function __callStatic($name, $args)
        {
            echo "Calling $name $args[0]";
        }
    }

    echo "<br>";

    MyStaticClass::myStaticTest("in static context");