<?php
include 'warrior.php';
include 'commander.php';
 class Squad
 {
     private $name;
     private $warriors;
     private $commander;
     private $min;
     private $max;

     public function __construct($name,$commander)
     {
         $this->min=5;
         $this->max=25;
         $this->name=$name;
         $this->warriors=array();
         $this->commander=$commander;
        array_push($this->warriors,$this->commander) ;
     }
     public function getName()
     {
       return $this->name;

     }

     public function getWarriors()
     {
         if(count($this->warriors)>$this->min)
         {
            return $this->warriors;
         }

     }

     public function deleteWarrior($warrior)
     {

             array_shift($this->warriors, $warrior);


     }
     public function addWarrior($warrior)
     {
         if(count($this->warriors)<$this->max)
         {
             $warrior->setHP( $warrior->getHP()+$this->commander->getAchive()->plusHp);
             $warrior->setSpeed( $warrior->getSpeed()+$this->commander->getAchive()->plusSpeed);
             array_push($this->warriors, $warrior);
         }

     }

 }

?>