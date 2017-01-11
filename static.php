<?php

class Employeer{
    
    
    public static $name ="Awais Zaki";
    
    public static $name2 = "I am out";
    public $age    ="22";
    
    function inside()
    {
       echo self::$name2;
    }
}

class emp extends Employeer{
    
    function pri() 
    {
        return self::$name;
        echo $age;
    }
}
echo "<h1 style='color:red';>Static outside of class</h1>";
echo Employeer::$name;

echo "<h1 style='color:red';>Static inside of class</h1>";
Employeer::inside();

echo emp::pri();


?>