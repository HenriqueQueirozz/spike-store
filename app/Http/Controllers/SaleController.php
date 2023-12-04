<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

use App\Models\Seller;
use App\Models\Sale;

class SaleController extends Controller
{
    private $saleModel;

    public function __construct(){
        $this->saleModel = new Sale;
    }

    public function listar($seller_id){
        //$sellers_sales = Seller::with('sales')->get();
        $sales = $this->saleModel->listar_vendas($seller_id);
        return $sales;
    }

    public function consultar($id){
        $sale = Sale::FindOrFail($id);
        return $sale;
    }

    public function inserir($sale_data){
        try {
            $seller = Seller::find($sale_data['seller_id']);

            $data = [
                'value' => $sale_data['value'],
                'date' => $sale_data['date']
            ];
        
            $seller->sales()->create($data);
            return true;
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function atualizar($sale_data){
        try {
            $sale = Sale::FindOrFail($sale_data['id']);

            //$sale->seller_fk = $sale_data['seller_id'];
            $sale->value = $sale_data['value'];
            $sale->date = $sale_data['date'];

            $sale->save();
            return $sale;
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function deletar($sale_id){
        $sale = Sale::FindOrFail($sale_id);
        $sale->delete();
    }
}
