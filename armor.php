<?php
abstract class Armor {
    protected $k ;
    public function __construct($k) {
        $this->k=$k;
    }
    public function getKoef()
    {
        return $this->k ;
    }
}
class Steel extends Armor {
    public function __construct() {
        parent::__construct(20);
    }
}
class Medium extends Armor {

    public function __construct() {
        parent::__construct(10);

    }
}

class Light extends Armor {
    public function __construct() {
        parent::__construct(5);
    }
}
?>