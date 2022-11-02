<?php
namespace App\Service;
use App\Modelos\Foto;
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__."/../../");
$dotenv->load();
define("URL", $_ENV['URL_BASE'].$_ENV['KEY'].$_ENV['QUERY']);
define("IMG",$_ENV['URL_IMG']);
class ApiService{
    public function getFoto(): array
    {
        $fotos = [];
        $datos = file_get_contents(URL);
        //Transformar en Json
        $datosJson=json_decode($datos);
        $datosFotos=$datosJson->hits;
        foreach($datosFotos as $objFoto){
            $fotos[]=(new Foto)->setFoto($objFoto->webformatURL)
            ->setAutor($objFoto->user)
            ->setLikes($objFoto->likes);    
        }
        return $fotos;
    }
}