<?php

abstract class Machine {
   
    abstract public function startEngine();
}

class PowerGenerator extends Machine {
    
    public function startEngine() {
        echo "Generator engine started.\n";
    }
}

class Excavator extends Machine {
    
    public function startEngine() {
        echo "Excavator engine started.\n";
    }
}


$generator = new PowerGenerator();
$generator->startEngine();

$excavator = new Excavator();
$excavator->startEngine();.