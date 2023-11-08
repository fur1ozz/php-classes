<?php

class CatClass
{
    public $name;
    private $age = 0;

    public function setName($name) {
        $this->name = $name;
    }
    public function birthday(){
        $this->age++;
        echo " - ".$this->age."<br>";
    }
    static function meow(){
        echo " meow";
    }

}