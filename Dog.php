<?php

class Dog{
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function birthday(){
        $this->age++;
        echo $this->name." sodien paliek - ".$this->age."<br>";
    }
    static function woof(){
        echo " woof";
    }
}