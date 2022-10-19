<!-- Aini Azzah - 21091397006 - 2021 B -->

<?php 
    require_once 'Prak6No4.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
        <title>Praktikum 6 No.4</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h4 class="text-center"><strong><u>Soal No.4</u></strong></h4>
                <br><br>
                <div class="col-4 mx-auto border p-2 mt-2">
                            <b><?= $riverBarge->getMaxLoad() . ' kg'; ?> <br></b>
                            <?= $riverBarge->addBox(17000) . ' kg'; ?> <br>
                            <?= $riverBarge->addBox(6000) . ' kg'; ?> <br>
                            <?= $riverBarge->addBox(11000) . ' kg'; ?> <br>
                            <?= $riverBarge->addBox(1000) . ' kg'; ?> <br>
                            <?= $riverBarge->dock(); ?> <br>
                            <?= $riverBarge->cruise(); ?> <br>
                            <?php 
                                echo "Jadi, Butuh Bahan Bakar sebanyak ".$riverBarge->calcFuelNeeds().' Liter'.'<br>';
                            ?>
                </div>

                <div class="col-4 mx-auto border p-2 mt-2">
                            <b><?= $seaPlane->getMaxLoad() . ' kg'; ?> <br></b>
                            <?= $seaPlane->addBox(14000) . ' kg'; ?> <br>
                            <?= $seaPlane->addBox(8000) . ' kg'; ?> <br>
                            <?= $seaPlane->dock(); ?> <br>
                            <?= $seaPlane->cruise(); ?> <br>
                            <?= $seaPlane->takeOff(); ?> <br>
                            <?= $seaPlane->fly(); ?> <br>
                            <?= $seaPlane->land(); ?> <br>
                            <?php 
                                echo "Jadi, Butuh Bahan Bakar sebanyak " . $seaPlane->calcFuelNeeds() . ' Liter'. '<br>';
                            ?>
                </div>

                <div class="col mx-auto border p-2 mt-2">
                            <b><?= $helicopter->getMaxLoad() . ' kg'; ?> <br></b>
                            <?= $helicopter->addBox(6000) . ' kg'; ?> <br>
                            <?= $helicopter->addBox(7000) . ' kg'; ?> <br>
                            <?= $helicopter->takeOff(); ?> <br>
                            <?= $helicopter->fly(); ?> <br>
                            <?= $helicopter->land(); ?> <br>
                            <?php 
                                echo "Jadi, Butuh Bahan Bakar sebanyak " . $helicopter->calcFuelNeeds() . ' Liter'. '<br>';
                            ?>
                </div>
            </div>
        </div>
    </body>
</html>