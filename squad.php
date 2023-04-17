<?php
include 'warrior.php';
include 'commander.php';
 class Squad
 {
     private $name;
     private $warriors;

     private $min;
     private $max;

     public function __construct($name,$commander)
     {
         $this->min=5;
         $this->max=26;
         $this->name=$name;
         $this->warriors=array();
        array_push($this->warriors,$commander) ;
     }
     public function setMin($min)
     {
         $this->min=$min;
     }
     public function setMax($max)
     {
         $this->min=$max;
     }
     public function getName()
     {
       return $this->name;

     }

     public function getWarriors()
     {
         if(count($this->warriors>$this->min))
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
         if(count($this->warriors<$this->max))
         {
             array_push($this->warriors, $warrior);
         }

     }

 }

?>