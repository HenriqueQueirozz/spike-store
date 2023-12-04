@extends('layouts.main')
@section('title', 'Spike store - Vendedores')

@section('content')
    <div id="container">
        @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        <div id="container-header">
            <h1>Vendedores</h1>
            <div id="div_buttons">
                <button class="btn btn-icon btn-white btn-rounded bold" type="button" onclick="redirectSalesCreate();"><ion-icon name="add-outline"></ion-icon> Adicionar venda</button>
                <button class="btn btn-icon btn-white btn-rounded bold" type="button" onclick="redirectSellersCreate();"><ion-icon name="add-outline"></ion-icon> Adicionar vendedor</button>
            </div>
        </div>
        <table id="table-seller">
            <thead>
                <tr>
                    <th class="text-left">Nome</th>
                    <th class="text-left">E-mail</th>
                    <th class="text-center" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sellers as $seller)
                    <tr>
                        <td><a href="">{{ $seller->name }}</a></td>
                        <td>{{ $seller->email }}</td>
                        <td><a href="/vendedores/edit/{{ $seller->seller_id }}"><button class="btn btn-yellow btn-rounded bold"><ion-icon name="color-wand-outline"></ion-icon></button></a></td>
                        <td><a href="/v1/seller/destroy/{{ $seller->seller_id }}"><button class="btn btn-red btn-rounded bold"><ion-icon name="trash-outline"></ion-icon></button></a></td>
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
    </script>
@endsection