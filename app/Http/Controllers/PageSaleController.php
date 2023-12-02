<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSaleController extends SaleController
{
    public function vendas(){
        $sales = $this->index();
        return view('sale.index', ['sales' => $sales]);
    }
}
