<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

use App\Models\Seller;

class SellerController extends Controller
{
    public function listar(){
        $sellers = Seller::all();
        return $sellers;
    }

    public function consultar($seller_id){
        $seller = Seller::FindOrFail($seller_id);
        return $seller;
    }

    public function inserir($seller_data){
        try {
            $seller = new Seller;

            $seller->name = $seller_data['name'];
            $seller->email = $seller_data['email'];

            $seller->save();
            return $seller;
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function atualizar($seller_data){
        try {
            $seller = Seller::FindOrFail($seller_data['seller_id']);

            $seller->name = $seller_data['name'];
            $seller->email = $seller_data['email'];

            $seller->save();
            return $seller;
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function deletar($seller_id){
        try {
            $seller = Seller::FindOrFail($seller_id);
            $seller->delete();
            return true;
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }
}
