<?php

class constrctr{

    
    private $fisrtname;
    private $lastname;
    private $age;
    
    
     public function __construct()
    {
        $firstname ="";
        $lastname ="";
        $age=0;
    }
    
    public function setData($firstname, $lastname, $age)
    {
        $this->$firstname = $firstname;
        $this->lastname = $lastname;
        $this->$age = $age;
    }
    
    public function printData()
    {
        echo "First Name: ".$this->$firstname." Last Name: ".$this->$lastname. "Age: ". $this->$age;
    }
    
  
    
    
    
    
}

$c = new constrctr();
$c->setData("Awais","Zaki",20);
$c->printData();


?>