<?php

abstract class Weapon {
protected $name ;
protected $damage ;

public function __construct($name,$damage) {
$this->name=$name;
$this->damage=$damage;
}

public function getName()
{
return $this->name ;
}

public function getDamage()
{
return $this->damage ;
}

}
class Bow extends Weapon {
public function __construct() {
parent::__construct('bow',100);
}
}
class Pike extends Weapon {
public function __construct() {
parent::__construct('pike',100);
}
}
class Axe extends Weapon {
public function __construct() {
parent::__construct('axe',100);
}


}

class Halberd extends Weapon {
public function __construct() {
parent::__construct('halberd',100);
}
}


class Sword extends Weapon {
public function __construct() {
parent::__construct('sword',100);
}
}

class Shield extends Weapon {
public function __construct() {
parent::__construct('shield',100);
}
}

class Glaive extends Weapon {
public function __construct() {
parent::__construct('glaive',50);
}
}

class SwordAndShield extends Weapon {
public function __construct() {
parent::__construct('swordAndShield',150);
}
}

class Saber extends Weapon {
public function __construct() {
parent::__construct('saber',20);
}
}
?>