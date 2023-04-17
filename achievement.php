<?php
 class Achievement
{
    public $plusHp;
    public $plusSpeed;

    public function __construct($plusHp,$plusSpeed)
    {
        $this->plusHp=$plusHp;
        $this->plusSpeed=$plusSpeed;
    }
}
?>