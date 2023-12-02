<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sale;

class SaleController extends Controller
{
    public function index(){
        $sales = Sale::all();
        return $sales;
    }

    public function store($data): void{
        $sale = new Sale;

        $sale->seller_fk = $data['seller_id'];
        $sale->value = $data['value'];
        $sale->date = $data['date'];

        $sale->save();
    }

    public function show($id){
        $sale = Sale::FindOrFail($id);
        return $sale;
    }

    public function update($data): void{
        $sale = Sale::FindOrFail($data['id']);

        //$sale->seller_fk = $data['seller_id'];
        $sale->value = $data['value'];
        $sale->date = $data['date'];

        $sale->save();
    }

    public function destroy($id): void{
        $sale = Sale::FindOrFail($id);
        $sale->delete();
    }
}
