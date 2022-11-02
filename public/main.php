<?php
use App\Service\ApiService;
require __DIR__ . "/../vendor/autoload.php";
$fotos = (new ApiService)->getFoto();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruben Alvarez Fernandez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color:darkgray;">
    <div class="container mt-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <center>
            <div class="carousel-inner">
                <?php
                $cont = 1;
                foreach ($fotos as $fot) {
                    echo ($cont == 1) ? "<div class='carousel-item active'>" : "<div class='carousel-item'>";
                    echo <<<TXT
                    <div class="card" style="width: 36rem;">
                    <img src="{$fot->getFoto()}" class="card-img-top" alt="poster fot">
                    <div class="card-body">
                    <h5 class="card-title">Autor: {$fot->getAutor()}</h5>
                    <p class="card-text">Likes: {$fot->getLikes()}</p>
                    </div>
                    </div>
                    TXT;
                    echo "</div>";
                    $cont++;
                }
                ?>
            </div>
            </center>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>

</html>