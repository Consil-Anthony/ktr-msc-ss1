<?php

function loadClass($class){
    require "./exceptions/".$class.".php";
}
spl_autoload_register("loadClass");

$warrior = new Warrior("Jean-Luc");
$mage = new Mage("Robert");

$warrior->tryToAttack("screwdriver");
$mage->tryToAttack("hammer");
$warrior->tryToAttack("hammer");
$mage->tryToAttack();

print "\n\n";

$mage->tryToAttack("wand");
$mage->tryToAttack("magic");
$warrior->tryToAttack();
$warrior->tryToAttack("sword");