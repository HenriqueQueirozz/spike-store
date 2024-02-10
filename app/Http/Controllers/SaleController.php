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

    public function listSale($seller_id){
        $sales = $this->saleModel->listSale($seller_id);
        return $sales;
    }

    public function selectSale($id){
        $sale = Sale::FindOrFail($id);
        return $sale;
    }

    public function insertSale($sale_data){
        try {
            $seller = Seller::find($sale_data['seller_id']);

            $data = [
                'value' => $sale_data['value'],
                'commission' => $sale_data['commission'],
                'date' => $sale_data['date']
            ];
        
            $seller->sales()->create($data);
            return true;
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function updateSale($sale_data){
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

    public function deleteSale($sale_id){
        $sale = Sale::FindOrFail($sale_id);
        $sale->delete();
    }
}
