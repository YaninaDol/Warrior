<?php
include 'horse.php';
class Mounted extends Warrior {
    protected $horse;
    public $Bow;
    public $Pike;
    public $Sword;

    public function __construct($horse) {
        parent::__construct(500,new Medium(),$horse->speed);
        $this->horse=$horse;
        $this->Bow=new Bow();
        $this->Pike=new Pike();
        $this->Sword=new Sword();

    }
    public function getBow()
    {
        return $this->Bow;
    }

    public function getPike()
    {
        return $this->Pike;
    }
    public function getSword()
    {
        return $this->Sword;
    }
    public function getWeapon()
    {
        $weapons=array();
        array_push($weapons,$this->Bow);
        array_push($weapons,$this->Pike);
        array_push($weapons,$this->Sword);

        $random_keys=array_rand($weapons,2);
        return $weapons[$random_keys[0]];

    }


}
?>