<?php

define("company","This is ebay");
class Employeer{
    
    const name ="Awais zaki";
    
    
}
echo "<h1 style='color:red';>Const inside the class</h1>";
echo Employeer::name;

echo "<h1 style='color:red';>Const outside of class</h1>";
echo "</br>".company;



?>