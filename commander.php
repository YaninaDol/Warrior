<?php
include 'achievement.php';
class Commander extends Warrior
{
   private $achieve;

    public function __construct($achieve)
    {
        parent::__construct(800,new Steel(),100);
        $this->achieve=$achieve;
    }

    public function getAchive()
    {
        return $this->achieve;
    }
}
?>