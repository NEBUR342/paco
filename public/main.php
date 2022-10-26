<?php
    require __DIR__."/../vendor/autoload.php";
    use App\Service\ApiService;
    $peliculas=(new ApiService)->getPelicula();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background-color:dimgrey">
    <div class="container mt-4">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $cont=1;
                foreach($peliculas as $peli){
                    echo ($cont==1) ? "<div class='carousel-item active'>":"<div class='carousel-item'>";
                    echo "<img src='{$peli->getCaratula()}' class= 'd-block w-100' alt='as'>";
                    echo "</div>";
                    $cont++;
                }
                ?>
                <div class='carousel-item active'>
                    <img src=https://image.tmdb.org/t/p/w500/https://image.tmdb.org/t/p/w500//qxeqKcVBWnQxUp1w6fwWcxZEA6m.jpg class='d-block w-100' alt='sin imagenes'>
                </div>
                <div class='carousel-item'>
                    <img src=https://image.tmdb.org/t/p/w500/https://image.tmdb.org/t/p/w500//tIX6j3NzadlwGcJ52nuWdmtOQkg.jpg class='d-block w-100' alt='sin imagenes'>
                </div>
                <div class='carousel-item'>
                    <img src=https://image.tmdb.org/t/p/w500/https://image.tmdb.org/t/p/w500//aTovumsNlDjof7YVoU5nW2RHaYn.jpg class='d-block w-100' alt='sin imagenes'>
                </div>
                <div class='carousel-item'>
                    <img src=https://image.tmdb.org/t/p/w500/https://image.tmdb.org/t/p/w500//5GA3vV1aWWHTSDO5eno8V5zDo8r.jpg class='d-block w-100' alt='sin imagenes'>
                </div>
                <div class='carousel-item'>
                    <img src=https://image.tmdb.org/t/p/w500/https://image.tmdb.org/t/p/w500//5hoS3nEkGGXUfmnu39yw1k52JX5.jpg class='d-block w-100' alt='sin imagenes'>
                </div>
                <div class='carousel-item'>
                </head>

                    <body>

                    </body>

</html>