<?php
    class Warrior extends Character{
        public function __construct(string $name){
            $this->setName($name);
            $this->setLife(100);
            $this->setStrength(10);
            $this->setAgility(8);
            $this->setWit(3);
            $this->RPGClass = 'Warrior';

            print $this->name.": My name will go down in history !\n";
        }

        public function attack(string $weapon){
            if ($weapon == 'hammer' || $weapon == 'sword') {
                print $this->name.": Rrrrrrrrr....\n";
                print $this->name.": I'll crush you with my ".$weapon."!\n";
            }
        }

        public function moveRight(){
            print $this->name.": moves right like a bad boy.\n";
        }

        public function moveLeft(){
            print $this->name.": moves left like a bad boy.\n";
        }

        public function moveForward(){
            print $this->name.": moves back like a bad boy.\n";
        }

        public function moveBack(){
            print $this->name.": moves forward like a bad boy.\n";
        }
    }
?>