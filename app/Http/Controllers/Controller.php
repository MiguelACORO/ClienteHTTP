<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function realizarPeticion($metodo, $url, $parametros=[]){
        $cliente = new Client(['curl'=>[CURLOPT_CAINFO => base_path('resources\certs\cacert.pem')]]);

        $respuesta = $cliente->request($metodo, $url, $parametros);

        return $respuesta->getBody()->getContents();
    }
}





