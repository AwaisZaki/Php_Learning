<?php

class Employeer{
    
    
   public $name ="Awais Zaki";
    public $age    ="22";
    
    function hello()
    {
        echo "<br>Hellow World!";
    }
}

$n = new Employeer();

echo $n->name. " is ". $n->age;

$n->hello();

$n->name = "owais";

echo $n->name;


?>