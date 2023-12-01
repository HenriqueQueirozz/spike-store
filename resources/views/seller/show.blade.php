@extends('layouts.main')
@section('title', 'Spike store - Vendedores')

@section('content')
    <div id="container">
        <div id="container-header">
            <button class="btn btn-icon btn-white bold" type="button" onclick="redirectSalesCreate();"><ion-icon name="add-outline"></ion-icon> Adicionar venda</button>
            <h1>Vendedores</h1>
            <button class="btn btn-icon btn-white bold" type="button" onclick="redirectSellersCreate();"><ion-icon name="add-outline"></ion-icon> Adicionar vendedor</button>
        </div>
        <table id="table-seller">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellers as $seller)
                    <tr>
                        <td><a href="">{{ $seller->name }}</a></td>
                        <td>{{ $seller->email }}</td>
                        <td><button class="btn btn-large btn-yellow bold" type="button" onclick="redirectSellersCreate();"><ion-icon name="create-outline"></ion-icon></button></td>
                        <td><button class="btn btn-large btn-red bold" type="button" onclick="redirectSellersCreate();"><ion-icon name="trash-outline"></ion-icon></button></td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function redirectSalesCreate(){
            window.location.href = "/vendas/create";
        }

        function redirectSellersCreate(){
            window.location.href = "/vendedores/create";
        }

        function SellersDelete(){
            console.log('deletado!');
        }

        function redirectSellersAlter(){
            window.location.href = "/vendedores/alter";
        }
    </script>
@endsection