<?php
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

            return $this->warriors;


     }
     public function isComplete()
     {
         if(count($this->warriors)>$this->min)
         {
             return true;
         }
         return false;

     }

     public function deleteWarrior($value, $strict = TRUE)
     {


             if(($key = array_search($value, $this->warriors, $strict)) !== FALSE) {
                 unset($this->warriors[$key]);
                 echo 'Убит'.'<br>';
             }




     }
     public function addWarrior($twarrior)
     {
         if(count($this->warriors)<$this->max)
         {
             $twarrior->setHP( $twarrior->getHP()+$this->commander->getAchive()->plusHp);
             $twarrior->setSpeed( $twarrior->getSpeed()+$this->commander->getAchive()->plusSpeed);
             array_push($this->warriors, $twarrior);
         }

     }

     public function print()
     {
         foreach ($this->warriors as $item)
         {
             echo "HP: {$item->getHP()} <br>";
             echo "Speed: {$item->getSpeed()} <br>";
         }
     }

 }

?>