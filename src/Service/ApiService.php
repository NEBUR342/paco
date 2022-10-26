<?php

namespace App\Service;


use App\Modelos\Pelicula;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__."/../../");
$dotenv->load();
//require __DIR__."/../../vendor/autoload.php";

//define('URL', "https://api.themoviedb.org/3/movie/popular?api_key=92d078563f025b78f666e9ce88afd7b6&language=en-US&page=1");
//define("IMG", "https://image.tmdb.org/t/p/w500");
define("URL", $_ENV['URL_BASE'].$_ENV['KEY']);
// die(URL);
define("IMG",$_ENV['URL_IMG']);
class ApiService
{
    public function getPelicula(): array
    {
        $peliculas = [];
        $datos = file_get_contents(URL);
        //Transformar en Json
        $datosJson=json_decode($datos);
        $datosPelis=$datosJson->results;
        foreach($datosPelis as $objPelicula){
            $peliculas[]=(new Pelicula)->setTitulo($objPelicula->title)
            ->setResumen($objPelicula->overview)
            ->setPoster(IMG.$objPelicula->poster_path)
            ->setFechaEstreno($objPelicula->release_date)
            ->setCaratula(IMG.$objPelicula->backdrop_path);    
        }
        // echo "<pre>";
        // var_dump($peliculas);
        // echo "</pre>";
        return $peliculas;
    }
}