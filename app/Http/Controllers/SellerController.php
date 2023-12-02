<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;

class SellerController extends Controller
{
    public function index(){
        $sellers = Seller::all();
        return $sellers;
    }

    public function store($data): void{
        $seller = new Seller;

        $seller->name = $data['name'];
        $seller->email = $data['email'];

        $seller->save();
    }

    public function show($id){
        $seller = Seller::FindOrFail($id);
        return $seller;
    }

    public function update($data): void{
        $seller = Seller::FindOrFail($data['id']);

        $seller->name = $data['name'];
        $seller->email = $data['email'];

        $seller->save();
    }

    public function destroy($id): void{
        $seller = Seller::FindOrFail($id);
        $seller->delete();
    }
}
