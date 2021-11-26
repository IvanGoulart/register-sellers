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

    //Funcion para filtrar um Seller
    public function findSeller($id){

        $response = Http::get($this->urlbase. 'seller/show/'.$id);
        return json_decode($response -> getBody() -> getContents());
    }

    //Funcion para filtrar um Seller
    public function registerSale($request){

        $response = Http::post($this->urlbase. 'sale/create',[
            'seller_id' => $request->idSeller,
            'amount' => $request->amount,
            'dt_sale' => $request->dtSale

        ]);
        return json_decode($response -> getBody() -> getContents());
    }

}
