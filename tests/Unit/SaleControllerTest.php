<?php

namespace Tests\Unit;

use App\Http\Controllers\SaleController;
use PHPUnit\Framework\TestCase;

class SaleControllerTest extends TestCase
{   
    private $controller;

    public function __construct()
    {
        $controller = new SaleController;   
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
            '' => ,
            '' => ,
        ];
        
        $reponse = $this->controller->inserir();
        $this->assertTrue($reponse);
    }

    public function atualizar(): void
    {
        $reponse = $this->controller->atualizar();
        $this->assertTrue($reponse);
    }

    public function deletar(): void
    {
        $reponse = $this->controller->deletar();
        $this->assertTrue($reponse);
    }
}
