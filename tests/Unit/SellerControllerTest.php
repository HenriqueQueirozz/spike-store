<?php

namespace Tests\Unit;

use App\Http\Controllers\SellerController;
use Tests\TestCase;

class SellerControllerTest extends TestCase
{
    private $controller;

    public function __construct()
    {
        $controller = new SellerController;   
    }

    public function listar(): void
    {
        $reponse = $this->controller->listar();
        $this->assertIsList($reponse);
    }

    public function consultar(): void
    {
        $reponse = $this->controller->consultar();
        $this->assertIsList($reponse);
    }

    public function inserir(): void
    {
        $data = [
            'name' => 'Nome teste',
            'email' => 'teste@gmail.com',
        ];
        
        $reponse = $this->controller->inserir($data);
        $this->assertTrue($reponse);
    }

    public function atualizar(): void
    {
        $data = [
            'seller_id' => '1',
            'name' => 'Nome atualizado',
            'email' => 'testeAtualizado@gmail.com',
        ];
        
        $reponse = $this->controller->atualizar($data);
        $this->assertTrue($reponse);
    }

    public function deletar(): void
    {
        $data = 1;
        $reponse = $this->controller->deletar($data);
        $this->assertTrue($reponse);
    }
    
}
