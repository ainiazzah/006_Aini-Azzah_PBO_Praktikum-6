<!-- Aini Azzah - 21091397006 - 2021 B -->
     
<?php
    require_once 'Prak6No2Interface.php';

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
            return 'Pesawat terbang';
        }
    }

    class Bird implements Flyer 
    {
        public function takeOff() 
        {
            return 'Burung mencari makan';
        }
        
        public function land() 
        {
            return 'Burung kembali pulang';
        }

        public function fly() 
        {
            return 'Burung terbang';
        }

        public function buildNest() 
        {
            return 'Burung membuat sarang';
        }

        public function layEggs()
        {
            return 'Burung bertelur';
        }
    }

    class Superman implements Flyer 
    {
        public function takeOff() 
        {
            return 'Superman lepas landas';
        }
        
        public function land() 
        {
            return 'Superman mendarat';
        }

        public function fly() 
        {
            return 'Superman terbang';
        }

        public function leapBuilding() 
        {
            return 'Superman melompati gedung-gedung tinggi';
        }

        public function stopBullet() 
        {
            return 'Superman menghindari peluru';
        }
    }

    $airplane = new Airplane;
    $bird = new Bird;
    $superman = new Superman;
?>