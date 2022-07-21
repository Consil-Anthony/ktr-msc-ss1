<?php

function loadClass($class){
    require "./".$class.".php";
}
spl_autoload_register("loadClass");

$mage = new Mage("Jean-Morice");

print $mage->getName()."\n";
print $mage->getRPGClass()."\n";
print $mage->getLife()."\n";
print $mage->getAgility()."\n";
print $mage->getStrength()."\n";
print $mage->getWit()."\n";
$mage->unsheathe();
$mage->attack('wand');
$mage->moveBack();
$mage->moveRight();
$mage->moveForward();
$mage->moveLeft();

print "\n\n";

$warrior = new Warrior("Morice");

print $warrior->getName()."\n";
print $warrior->getRPGClass()."\n";
print $warrior->getLife()."\n";
print $warrior->getAgility()."\n";
print $warrior->getStrength()."\n";
print $warrior->getWit()."\n";
$warrior->unsheathe();
$warrior->attack('hammer');
$warrior->moveBack();
$warrior->moveRight();
$warrior->moveForward();
$warrior->moveLeft();