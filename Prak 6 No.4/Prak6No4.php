<!-- Aini Azzah - 21091397006 - 2021 B -->

<?php

    require_once 'Prak6No4Abstrak.php';
    require_once 'Prak6No4Interface.php';

    class RiverBarge extends Vehicle implements Sailer
    {
        public function __construct($maxLoad, $name)
        {
            $this->maxLoad = $maxLoad;
            $this->name = $name;
        }

        public function calcFuelNeeds()
        {
            $fuel = $this->calcFuelEfficiency();
            $trip = $this->calcTripDistance();
            
            return ceil($fuel /= $trip);
        }

        public function dock()
        {
            return $this->name . ' berada di dermaga';
        }
        
        public function cruise()
        {
            return $this->name . ' sedang berlayar';
        }
    }

    class Airplane implements Flyer
    {
        public function takeOff()
        {
            return 'Pesawat lepas landas';
        }
        public function land()
        {
            return 'Pesawat mendarat';
        }
        public function fly()
        {
            return 'Pesawat dalam perjalanan';
        }
    }

    class SeaPlane extends Vehicle implements Sailer
    {
        public function __construct($maxLoad, $name)
        {
            $this->maxLoad = $maxLoad;
            $this->name = $name;
        }

        public function calcFuelNeeds()
        {
            $fuel = $this->calcFuelEfficiency();
            $trip = $this->calcTripDistance();
        
            return ceil($fuel /= $trip);
        }

        public function dock()
        {
            return $this->name . ' berada di dermaga';
        }
        
        public function cruise()
        {
            return $this->name . ' sedang berlayar';
        }

        public function takeOff()
        {
            return $this->name . ' lepas landas';
        }
        
        public function land()
        {
            return $this->name . ' mendarat';
        }

        public function fly()
        {
            return $this->name . ' dalam perjalanan';
        }
    }

    class Helicopter extends Vehicle
    {
        public function __construct($maxLoad, $name)
        {
            $this->maxLoad = $maxLoad;
            $this->name = $name;
        }

        public function calcFuelNeeds()
        {
            $fuel = $this->calcFuelEfficiency();
            $trip = $this->calcTripDistance();
        
            return ceil($fuel /= $trip);
        }
        public function takeOff()
        {
            return $this->name . ' lepas landas';
        }
        
        public function land()
        {
            return $this->name . ' mendarat';
        }

        public function fly()
        {
            return $this->name . ' dalam perjalanan';
        }
    }

    $riverBarge = new RiverBarge(30000, 'River Barge');
    $seaPlane = new SeaPlane(20000, 'Sea Plane');
    $helicopter = new Helicopter(10000, 'Helicopter');
?>