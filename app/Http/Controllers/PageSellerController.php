<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;

use App\Models\Seller;

class PageSellerController extends SellerController
{
    public function index(){  
        $sellers = $this->listSeller();      
        return view('seller.index', ['sellers' => $sellers]);
    }

    public function create(){
        return view('seller.create');
    }

    public function edit($id){
        $seller = $this->selectSeller($id);     
        return view('seller.edit', ['seller' => $seller]);
    }

    public function createSales(){
        $sellers = $this->listSeller();  

        if(empty($sellers[0])){
            return view('seller.index', ['sellers' => $sellers])->with('msg', 'Antes de criar uma nova venda é necessário cadastrar ao menos um Vendedor');
        }
        
        return view('sale.create', ['sellers' => $sellers]);
    }

    /* Processamento */
    public function store(StoreSellerRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $seller = [
            'name' => $validated['seller_name'],
            'email' => $validated['seller_email']
        ];

        $response = $this->insertSeller($seller);

        return redirect('/seller/create')->with('msg', 'Vendedor criado com sucesso!');
    }

    public function update(UpdateSellerRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $update_seller = [
            'seller_id' => $validated['seller_id'],
            'name' => $validated['seller_name'],
            'email' => $validated['seller_email']
        ];

        $seller = $this->selectSeller($update_seller['seller_id']);
        if($seller['email'] != $update_seller['email']){
            $verification_seller = Seller::where('email', $update_seller['email'])->first();

            if($verification_seller){
                return redirect('/seller/edit/'.$seller['seller_id']);
            }
        }
        
        $response = $this->updateSeller($update_seller);

        return redirect('/seller');
    }

    public function destroy($seller_id)
    {
        if(empty($seller_id)){
            return redirect('/seller')->with('msg', 'Não foi possível excluir o vendedor!');
        }
        
        $response = $this->deleteSeller($seller_id);
        return redirect('/seller')->with('msg', 'Vendedor excluído com sucesso!');
    }
}
