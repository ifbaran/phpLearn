<?php
    declare(strict_types = 1);

    interface iHuman
    {
        const pi = 3.14;
        public function Eat();
        public function Sleep();
    }

    interface iDeveloper
    {
        public function Code();
    }

    class Human implements iHuman
    {
        public function Eat()
        {
            echo "Human Eating..<br>";
        }

        public function Sleep()
        {
            echo "Human Sleeping..zzzz..<br>";
        }
    }

    $human = new Human();
    $human->Eat();
    $human->Sleep();

    class Developer implements iHuman, iDeveloper
    {
        public function Eat()
        {
            echo "Developer Eating..<br>";
        }

        public function Sleep()
        {
            echo "Developer Sleeping..zzzz..<br>";
        }

        public function Code()
        {
            echo "Developer Coding...<br>";
        }
    }

    $developer = new Developer();
    $developer->Eat();
    $developer->Sleep();
    $developer->Code();