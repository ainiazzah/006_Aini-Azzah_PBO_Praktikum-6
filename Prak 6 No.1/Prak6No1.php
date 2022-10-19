<!-- Aini Azzah - 21091397006 - 2021 B -->

<?php
    require_once 'Prak6No1Abstrak.php';

    class Truck extends Vehicle 
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
    }
    
    class RiverBarge extends Vehicle 
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
    }
    
    $truck = new Truck(16000, 'Truck');
    $riverBarge = new RiverBarge(15000, 'River Barge');
?>