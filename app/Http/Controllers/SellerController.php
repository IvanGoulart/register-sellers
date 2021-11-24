<?php

namespace App\Http\Controllers;

use App\Repositories\Seller;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    protected $seller;

    public function __construct(Seller $seller){
        $this->seller = $seller;
    }

    public function index(){
        $sellers = $this->seller->list();

        return view('list-sellers', compact('sellers'));

      }

      public function store(Request $request){

        $this -> seller -> register($request);
        return redirect()->route('listSellers');
      }

      public function show($id){

        $SellerFind = $this -> seller -> findSeller($id);

        return view('list-sales-seller', compact('SellerFind'));
      }
}
