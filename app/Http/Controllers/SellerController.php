<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;

class SellerController extends Controller
{
    public function index(){
        $sellers = Seller::all();

        return view('seller.show', ['sellers' => $sellers]);
    }

    public function create(){
        $sellers = Seller::all();

        return view('seller.create', ['sellers' => $sellers]);
    }
}
