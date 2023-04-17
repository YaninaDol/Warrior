
<?php
include 'weapon.php';
include 'armor.php';
include 'warrior.php';
include 'mounted.php';
include 'footSoldier.php';


$soldier =new Mounted(new Horse(75));
$soldier->attack($soldier->getBow());
$soldier->defend($soldier->getSword());
$soldier->move();
?>


