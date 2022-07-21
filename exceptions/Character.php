<?php
    abstract class Character implements Movable{
        protected $name;
        protected const RPGClass = 'Character';
        protected $life = 50;
        protected $agility = 2;
        protected $strength = 2;
        protected $wit = 2;
   

        public function __construct(string $name){
            $this->setName($name);
        }

        public function getName(){
            return $this->name;
        }

        public function setName(string $name){
            $this->name = $name;
        }

        public function getLife(){
            return $this->life;
        }

        public function setLife(int $life){
            $this->life = $life;
        }

        public function getAgility(){
            return $this->agility;
        }

        public function setAgility(int $agility){
            $this->agility = $agility;
        }

        public function getStrength(){
            return $this->strength;
        }

        public function setStrength(int $strength){
            $this->strength = $strength;
        }

        public function getWit(){
            return $this->wit;
        }

        public function setWit(int $wit){
            $this->wit = $wit;
        }

        public function getRPGClass(){
            return $this->RPGClass;
        }

        public function attack(string $attack){
            print $this->name.": Rrrrrrrrr....\n";
        }

        public function moveRight(){
            print $this->name.": moves right\n";
        }

        public function moveLeft(){
            print $this->name.": moves left\n";
        }

        public function moveForward(){
            print $this->name.": moves back\n";
        }

        public function moveBack(){
            print $this->name.": moves forward\n";
        }

        public function tryToAttack(?string $weapon = ""){
            try {
                if ($this->attack($weapon) == false) {
                   throw new WeaponException();
                }
            }catch(WeaponException $e){
                print $e->attackErrorMessage($this->getRPGClass(), $weapon,$this->getName());
            }
        }

        final public function unsheathe(){
            print $this->getName().": unsheathes his weapon.\n";
        }
    }
?>