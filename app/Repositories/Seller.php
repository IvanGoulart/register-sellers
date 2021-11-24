<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Seller extends Model
{
    //Funções responsaveis por listar e criar um seller

    private $urlbase = 'localhost:8000/api/';

    public function list(){
        $response = Http::get($this->urlbase. 'seller/');
      return json_decode($response -> getBody()->getContents());
    }

    public function register($request){
        $response = Http::post($this->urlbase . 'seller/create', [
            'name' => $request->name,
            'email' => $request->email
        ]);

        return json_decode($response->getBody());
    }

    //Funcion para filtrar um Usuario
/*    public function filter($id){
        $response = Http::get($this->urlbase. 'sales/show');
        return json_decode($response -> getBody() -> getContents());
    }*/

}
