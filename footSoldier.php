<?php

abstract class FootSoldier extends Warrior {
}

class Heavy extends FootSoldier {
    protected $axe;
    protected $halberd;
    protected $shield;
    protected $sword;


    public function __construct() {
        parent::__construct(500,new Steel(),50);

        $this->axe=new Axe();
        $this->halberd=new Halberd();
        $this->shield=new Shield();
        $this->sword=new Sword();

    }
    public function getSword()
    {
        return $this->sword;
    }
    public function getAxe()
    {
        return $this->axe;
    }
    public function getHalberd()
    {
        return $this->halberd;
    }
    public function getShield()
    {
        return $this->shield;
    }

}

abstract class Lightly extends FootSoldier {
}

class Melee extends Lightly {
    protected $saber;
    protected $glaive;
    protected $sword;
    protected $swordAndShield;

    public function __construct() {
        parent::__construct(500,new Light(),50);

        $this->saber=new Saber();
        $this->glaive=new Glaive();
        $this->swordAndShield=new SwordAndShield();
        $this->sword=new Sword();

    }
    public function getSword()
    {
        return $this->sword;
    }
    public function getSaber()
    {
        return $this->saber;
    }
    public function getGlaive()
    {
        return $this->glaive;
    }
    public function getSwordandShield()
    {
        return $this->swordAndShield;
    }
}

class Ranged extends Lightly {
    protected $bow;

    public function __construct() {
        parent::__construct(500,new Light(),50);

        $this->bow=new Bow();

    }
    public function getBow()
    {
        return $this->bow;
    }
}
?>