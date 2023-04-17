<?php

abstract class Warrior {
    protected $health;
    protected $armor;
    protected $speed;

    public function __construct($health,$armor,$speed)
    {
        $this->health = $health;
        $this->armor = $armor;
        $this->speed = $speed-($this->armor->getKoef());
    }

    public function getHP()
    {
        return  $this->health;
    }

    public function getSpeed()
    {
        return  $this->speed;
    }

    public function setHP($HP)
    {
         $this->health=$HP;
    }

    public function setSpeed($speed)
    {
        return  $this->speed=$speed;
    }


    public function attack($weapon) {
        echo "Нанесен удар {$weapon->getName()}ом! <br>";
        $this->health= $this->health-($weapon->getDamage())+($this->armor->getKoef());
        echo "Здоровье: { $this->health}  <br>";
    }

    public function defend($weapon) {
        echo "Защита с использованием {$weapon->getName()}а! <br>";
    }

    public function move() {
        echo "Передвижение со скоростью {$this->speed}. <br>";
    }
}
?>