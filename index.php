
<?php
include 'weapon.php';
include 'armor.php';
include 'warrior.php';
include 'mounted.php';
include 'footSoldier.php';
include 'squad.php';
include 'commander.php';
include 'achievement.php';


$warrior =new Mounted(new Horse(75));
$warrior->attack($warrior->getBow());
$warrior->move();
$warrior->defend($warrior->getSword());


$warrior2 =new Melee();
$warrior2->attack($warrior->getSword());
$warrior2->move();
$warrior2->defend($warrior2->getGlaive());


$red_squad=new Squad('Red',new Commander(new Achievement(100,50)));
$red_squad->addWarrior($warrior);
$red_squad->addWarrior($warrior2);
$red_squad->print();

?>


