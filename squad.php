<?php
include 'warrior.php';
 class Squad
 {
     private $name;
     private $warriors;

     public function __construct($name)
     {
         $this->name=$name;
         $this->warriors=array();
     }

     public function getName()
     {
       return $this->name;

     }

     public function getWarriors()
     {
         if(count($this->warriors>5))
         {
            return $this->warriors;
         }

     }

     public function deleteWarrior($warrior)
     {
         if(count($this->warriors<25))
         {
             array_shift($this->warriors, $warrior);
         }

     }


 }

?>