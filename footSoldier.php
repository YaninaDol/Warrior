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

    public function getWeapon()
    {
        $weapons=array();
        array_push($weapons,$this->sword);
        array_push($weapons,$this->axe);
        array_push($weapons,$this->halberd);
        array_push($weapons,$this->shield);

        $random_keys=array_rand($weapons,2);
        return $weapons[$random_keys[0]];

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

    public function getWeapon()
    {
        $weapons=array();
        array_push($weapons,$this->sword);
        array_push($weapons,$this->saber);
        array_push($weapons,$this->glaive);
        array_push($weapons,$this->swordAndShield);

        $random_keys=array_rand($weapons,2);
        return $weapons[$random_keys[0]];

    }
}

class Ranged extends Lightly {
    protected $bow;

    public function __construct() {
        parent::__construct(500,new Light(),50);

        $this->bow=new Bow();

    }
    public function getWeapon()
    {
        return $this->bow;
    }
}
?>