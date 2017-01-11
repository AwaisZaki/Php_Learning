<?php

class Employeer{
    
    
    public $ename = "Awais";
    public $eage  = 22;
    
    protected $mname = "Ahsan";
    protected $mage  = 30;
    
    private $oname = "Ahmed";
    private $oage  = 49;
    
    function eshow(){
        
        echo "<h1>All attributes are public</h1><h2>Access by outside the <span style='color:red';>Employeer Class</span></h2>";
        echo "Name: ".$this->ename."<br> Age: ". $this->eage;
    }
    
     function oshow(){
        
        echo "<h1>All attributes are Private</h1><h2>Access only inside the<span style='color:red';> Employeer Class</span></h2>";
        echo "Name: ".$this->oname."<br> Age: ". $this->oage;
    }
    
    
}
    


class empToMan extends Employeer{
    
    function mshow(){
        
        echo "<h1>All attributes are protected</h1><h2>Access inside as well as only extends classes like<span style='color:red';> empToMan Extends Employeer Class</span></h2>";
        echo "Name: ".$this->mname."<br> Age: ". $this->mage;
    }
}



$emp = new Employeer;
$emp->eshow();
$emp->oshow();

$mangr = new empToMan;
$mangr->mshow();

?>