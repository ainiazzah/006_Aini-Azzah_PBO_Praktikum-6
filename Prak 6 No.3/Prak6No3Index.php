<!-- Aini Azzah - 21091397006 - 2021 B -->

<?php 
    require_once 'Prak6No3.php';
?>

<!DOCTYPE html>
<html lang="id">

    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
        <title>Praktikum 6 No.3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-5 mx-auto border p-3 mt-2">
                    <h4 class="text-center"><strong><u>Soal 3</u></strong></h4>
                    <br><br>
                    <?= $burung->eat(); ?> <br>
                    <?= $superman->eat(); ?> <br>
                    <br>

                    <b><?= $airplane->getMaxLoad() . ' kg'; ?> <br></b>
                    <?= $airplane->addBox(6000) . ' kg'; ?> <br>
                    <?= $airplane->addBox(2000) . ' kg'; ?> <br>
                    <?= $airplane->addBox(7000) . ' kg'; ?> <br>
                    <?= $airplane->addBox(5000) . ' kg'; ?> <br>
                    <?= $airplane->takeOff(); ?> <br>
                    <?= $airplane->fly(); ?> <br>
                    <?= $airplane->land(); ?> <br>

                    <?php 
                        echo "Jadi, Butuh Bahan Bakar sebanyak " . $airplane->calcFuelNeeds() . ' Liter'.'<br>';
                    ?>
                    <br>
                    <?= $superman->eat(); ?> <br>
                    <?= $superman->land(); ?> <br>
                    <?= $superman->takeOff(); ?> <br>
                    <?= $superman->fly(); ?> <br>
                    <?= $superman->leapBuilding(); ?> <br>
                    <?= $superman->stopBullet(); ?> <br>
                </div>
            </div>
        </div>
    </body>

</html>