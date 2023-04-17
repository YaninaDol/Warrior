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


}
?>