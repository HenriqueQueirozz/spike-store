<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSellerController extends SellerController
{
    public function vendedores(){  
        $sellers = $this->index();      
        return view('seller.show', ['sellers' => $sellers]);
    }

    public function vendedores_create(){
        return view('seller.create');
    }

    public function vendedores_alter(Request $request){
        $seller = $this->show($request->seller_id);     
        return view('seller.alter', ['seller' => $seller]);
    }

    public function vendas_create(){
        $sellers = $this->index();     
        return view('sale.create', ['sellers' => $sellers]);
    }
}
