<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

use App\Models\Seller;

class SellerController extends Controller
{
    public function listSeller(){
        $sellers = Seller::all();
        return $sellers;
    }

    public function selectSeller($seller_id){
        $seller = Seller::FindOrFail($seller_id);
        return $seller;
    }

    public function insertSeller($seller_data){
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

    public function updateSeller($seller_data){
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

    public function deleteSeller($seller_id){
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
