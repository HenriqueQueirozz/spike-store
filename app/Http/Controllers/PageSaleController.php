<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreSaleRequest;
use App\Models\Seller;

class PageSaleController extends SaleController
{
    public function index(Request $request){
        if($request['seller_id'] == 0){
            $request['seller_id'] = '';
        }
        $sales = $this->listSale($request['seller_id']);
        $sellers = Seller::all();
        return view('sale.index', ['sales' => $sales, 'seller_id' => $request['seller_id'], 'sellers' => $sellers]);
    }

    public function store(StoreSaleRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $sale = [
            'seller_id' => $validated['seller_id'],
            'date' => $validated['sale_date'],
            'value' => $validated['sale_value'],
            'commission' => $validated['sale_value'] * 0.085
        ];

        $response = $this->insertSale($sale);

        return redirect('/sale/create')->with('msg', 'Venda registrada com sucesso!');
    }
}
