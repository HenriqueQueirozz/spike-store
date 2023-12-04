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
        $sellers = $this->listar();      
        return view('seller.index', ['sellers' => $sellers]);
    }

    public function create(){
        return view('seller.create');
    }

    public function edit($id){
        $seller = $this->consultar($id);     
        return view('seller.edit', ['seller' => $seller]);
    }

    public function create_vendas(){
        $sellers = $this->listar();  

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

        $response = $this->inserir($seller);

        return redirect('/vendedores/create')->with('msg', 'Vendedor criado com sucesso!');
    }

    public function update(UpdateSellerRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $update_seller = [
            'seller_id' => $validated['seller_id'],
            'name' => $validated['seller_name'],
            'email' => $validated['seller_email']
        ];

        $seller = $this->consultar($update_seller['seller_id']);
        if($seller['email'] != $update_seller['email']){
            $verification_seller = Seller::where('email', $update_seller['email'])->first();

            if($verification_seller){
                return redirect('/vendedores/edit/'.$seller['seller_id']);
            }
        }
        
        $response = $this->atualizar($update_seller);

        return redirect('/vendedores');
    }

    public function destroy($seller_id)
    {
        if(empty($seller_id)){
            return redirect('/vendedores')->with('msg', 'Não foi possível excluir o vendedor!');
        }
        
        $response = $this->deletar($seller_id);
        return redirect('/vendedores')->with('msg', 'Vendedor excluído com sucesso!');
    }
}
