<!-- Aini Azzah - 21091397006 - 2021 B -->

<?php 
    require_once 'Prak6No2.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
    <title>Praktikum 6 No.2</title>
    </head>

    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-5 mx-auto border p-3 mt-2">
                    <h4 class="text-center"><strong><u>Soal 2</u></strong></h4>
                    <br>
                    <b><?php 
                            echo "Airplane";
                        ?>
                    </b> <br>
                    <?= $airplane->takeOff(); ?> <br>
                    <?= $airplane->fly(); ?> <br>
                    <?= $airplane->land(); ?> <br>
                    <br>
                    <b><?php 
                            echo "Bird";
                        ?>
                    </b> <br>
                    <?= $bird->buildNest(); ?> <br>
                    <?= $bird->takeOff(); ?> <br>
                    <?= $bird->fly(); ?> <br>
                    <?= $bird->land(); ?> <br>
                    <?= $bird->layEggs(); ?> <br>
                    <br>
                    <b><?php 
                            echo "Superman";
                        ?>
                    </b> <br>
                    <?= $superman->land(); ?> <br>
                    <?= $superman->takeOff(); ?> <br>
                    <?= $superman->fly(); ?> <br>
                    <?= $superman->leapBuilding(); ?> <br>
                    <?= $superman->stopBullet(); ?> <br>
                    <br>
                </div>
            </div>
        </div>
    </body>
</html>