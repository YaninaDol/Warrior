
<?php
include 'weapon.php';
include 'armor.php';
include 'warrior.php';
include 'mounted.php';
include 'footSoldier.php';
include 'squad.php';
include 'commander.php';
include 'achievement.php';
include 'battlefield.php';


$warrior =new Mounted(new Horse(75));
//$warrior->attack($warrior->getWeapon());
//$warrior->move();
//$warrior->defend($warrior->getWeapon());


$warrior2 =new Melee();
//$warrior2->attack($warrior->getWeapon());
//$warrior2->move();
//$warrior2->defend($warrior2->getWeapon());


$red_squad=new Squad('Red',new Commander(new Achievement(100,50)));
$red_squad->addWarrior($warrior);
$red_squad->addWarrior($warrior2);
$red_squad->addWarrior($warrior);
$red_squad->addWarrior($warrior2);
$red_squad->addWarrior($warrior);
$red_squad->addWarrior($warrior2);


$red_squad2=new Squad('Green',new Commander(new Achievement(50,20)));
$red_squad2->addWarrior($warrior);
$red_squad2->addWarrior($warrior2);
$red_squad2->addWarrior($warrior);
$red_squad2->addWarrior($warrior2);
$red_squad2->addWarrior($warrior);
$red_squad2->addWarrior($warrior2);
$battle=new Battlefield($red_squad,$red_squad2);
$battle->fight();

?>


