@extends('layouts.main')
@section('title', 'Spike store - Cadastro de vendas')

@section('content')
<div id="container">
    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif
    <div id="container-header">
        <h1>Cadastro de vendas</h1>
    </div>
    <form id="form" method="POST" action="/v1/sale/store">
        @csrf
        <select name="seller_id" id="seller_id">
            @foreach($sellers as $seller)
                <option value="{{ $seller->seller_id }}">{{ $seller->name }}</option>
            @endforeach
        </select>
        <input type="text" id="sale_value" name="sale_value" placeholder="Valor da venda">
        <input type="date" id="sale_date" name="sale_date" value="{{ date('Y-m-d') }}" placeholder="Data da venda">
        <button class="btn btn-large btn-rounded btn-green bold" type="submit">Registrar venda</button>
    </form>
</div>
@endsection