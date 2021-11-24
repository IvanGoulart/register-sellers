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

      public function store($id){
dd($id);
        $this -> seller -> register($id);
        return redirect()->route('listSellers');
      }

      public function show(Request $request){
        $sellers = $this -> seller -> unico($request->search);
        return view('list-sellers', compact('sellers'));
      }
}
