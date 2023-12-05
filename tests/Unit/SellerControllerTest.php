<?php

namespace Tests\Unit;

use App\Http\Controllers\SellerController;
use App\Models\Seller;
use Tests\TestCase;

class SellerControllerTest extends TestCase
{
    public function test_inserir(): void
    {
        $controller = new SellerController;
        $data = [
            'name' => 'Nome teste',
            'email' => 'teste@gmail.com'
        ];
        
        $response = $controller->inserir($data);
        $this->assertIsObject($response);
    }

    public function test_atualizar(): void
    {
        $controller = new SellerController;
        Seller::create(['seller_id' => 1, 'name' => 'Nome teste', 'email' => 'teste@gmail.com']);

        $data = [
            'seller_id' => '1',
            'name' => 'Nome atualizado',
            'email' => 'testeAtualizado@gmail.com'
        ];
        
        $response = $controller->atualizar($data);
        $this->assertIsObject($response);
    }

    public function test_deletar(): void
    {
        $controller = new SellerController;
        Seller::create(['seller_id' => 1, 'name' => 'Nome teste', 'email' => 'teste@gmail.com']);
        
        $data = 1;
        $reponse = $controller->deletar($data);
        $this->assertTrue($reponse);
    }
    
}
