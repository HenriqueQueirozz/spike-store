<?php

namespace Tests\Unit;

use App\Http\Controllers\SaleController;
use App\Models\Sale;
use Tests\TestCase;

class SaleControllerTest extends TestCase
{   
    /*public function test_inserir(): void
    {
        $controller = new SaleController;
        $data = [
            'name' => 'Nome teste',
            'email' => 'teste@gmail.com'
        ];
        
        $response = $controller->inserir($data);
        $this->assertIsObject($response);
    }

    public function test_atualizar(): void
    {
        $controller = new SaleController;
        Sale::create(['Sale_id' => 1, 'name' => 'Nome teste', 'email' => 'teste@gmail.com']);

        $data = [
            'Sale_id' => '1',
            'name' => 'Nome atualizado',
            'email' => 'testeAtualizado@gmail.com'
        ];
        
        $response = $controller->atualizar($data);
        $this->assertIsObject($response);
    }

    public function test_deletar(): void
    {
        $controller = new SaleController;
        Sale::create(['Sale_id' => 1, 'name' => 'Nome teste', 'email' => 'teste@gmail.com']);
        
        $data = 1;
        $reponse = $controller->deletar($data);
        $this->assertTrue($reponse);
    }*/
}
