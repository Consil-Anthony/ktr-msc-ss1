<?php
    class WeaponException extends Exception{
        public function attackErrorMessage(string $class, string $weapon, string $name){
            if ($weapon != "") {
                if ($class == "Warrior") {
                    $msg = $name.": A ".$weapon."?? What should I do with this ?!\n";
                }else if($class == "Mage"){
                    $msg = $name.":  I don 't need this stupid ".$weapon."! Don 't misjudge my powers !\n";
                }
            }else{
                $msg = $name.": I refuse to fight with my bare hands.\n";
            }
            return $msg;
        }
    }