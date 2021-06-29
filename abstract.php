<?php
    declare(strict_types = 1);

    abstract class AbstractHuman 
    {
        public string $firstName = "İbrahim Furkan";
        public string $lastName = "Baran";

        abstract public function getName();
    }

    class Human extends AbstractHuman
    {
        public function getName()
        {
            return $this->firstName . " " . $this->lastName;
        }
    }

    $human = new Human();
    echo $human->getName()."<br>";

    /*
        Difference Interfaces and Abstract Classes

        Abstract classes can contain non-abstarct members but interfaces cannot.
        Abstract classes can extend non-abstract class but interfaces cannot.
        A class can inherit many interfaces but can't extend many abstract classes.

    */