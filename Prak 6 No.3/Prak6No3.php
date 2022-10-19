<!-- Aini Azzah - 21091397006 - 2021 B -->

<?php
    require_once 'Prak6No3Abstrak.php';
    require_once 'Prak6No3Interface.php';

    class Animal  
    {
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
        
        public function eat()
        {
            return $this->name . ' sedang makan';
        }
    }

    class Homosapiens extends Animal {}

    class Airplane extends Vehicle implements Flyer
    {
        public function __construct($maxLoad, $name)
        {
            $this->maxLoad = $maxLoad;
            $this->name = $name;
        }
        
        public function takeOff()
        {
            return "$this->name lepas landas";
        }
        
        public function land()
        {
            return "$this->name mendarat";
        }

        public function fly()
        {
            return "$this->name terbang";
        }

        public function calcFuelNeeds()
        {
            $fuel = $this->calcFuelEfficiency();
            $trip = $this->calcTripDistance();

            return ceil($fuel /= $trip);
        }
    }

    class Superman extends Homosapiens implements Flyer
    {
        public function takeOff()
        {
            return "$this->name lepas landas";
        }
        
        public function land()
        {
            return "$this->name mendarat";
        }

        public function fly()
        {
            return "$this->name terbang";
        }

        public function leapBuilding()
        {
            return "Superman melompati gedung-gedung tinggi";
        }

        public function stopBullet()
        {
            return "Superman menghindari peluru";
        }
    }

    $burung = new Animal('Bird');
    $airplane = new Airplane(25000, 'Airplane');
    $superman = new Superman('Superman');
?>