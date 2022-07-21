<?php
    class Mage extends Character{
        public function __construct(string $name){
            $this->setName($name);
            $this->setLife(70);
            $this->setStrength(3);
            $this->setAgility(10);
            $this->setWit(10);
            $this->RPGClass = 'Mage';

            print $this->name.": May the gods be with me.\n";
        }
        
        public function attack(string $weapon){
            if ($weapon == 'magic' || $weapon == 'wand') {
                print $this->name.": Rrrrrrrrr....\n";
                print $this->name.": Feel the power of my ".$weapon."!\n";
                return true;
            }else{
                return false;
            }
        }

        public function moveRight(){
            print $this->name.": moves right furtively.\n";
        }

        public function moveLeft(){
            print $this->name.": moves left furtively.\n";
        }

        public function moveForward(){
            print $this->name.": moves back furtively.\n";
        }

        public function moveBack(){
            print $this->name.": moves forward furtively.\n";
        }
    }
?>