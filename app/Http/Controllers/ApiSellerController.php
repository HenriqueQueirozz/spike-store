<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiSellerController extends SellerController
{
    public function store(Request $request){
        $seller = $this->store($request->toArray());  
    }
}
