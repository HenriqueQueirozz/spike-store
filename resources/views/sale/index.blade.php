@extends('layouts.main')
@section('title', 'Spike store - Vendas')

@section('content')
    <div id="container">
        @if(session('msg'))
            <p class="msg" style="color: white;">{{ session('msg') }}</p>
        @endif
        @yield('content')
        <div id="container-header">
            <h1>Vendas</h1>
            <form id="div_buttons" method="GET" action="/vendas">
                <select name="seller_id" id="seller_id">
                    <option value="0">Todos</option>
                    @foreach($sellers as $seller)
                        <option value="{{ $seller->seller_id }}" {{ $seller_id == $seller->seller_id ? 'selected' : '' }}>{{ $seller->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-white btn-rounded bold">Buscar</button>
            </form>
        </div>
        <table id="table-sales">
            <thead>
                <tr>
                    <th class="text-left" width="10%">N° venda</th>
                    <th class="text-left">Vendedor</th>
                    <th class="text-left">Email</th>
                    <th class="text-right">Comissão (R$)</th>
                    <th class="text-right">Valor da venda (R$)</th>
                    <th class="text-left">Data venda</th>        
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <td class="text-left">#{{ $sale->sale_id }}</td>
                        <td class="text-left">{{ $sale->name }}</td>
                        <td class="text-left">{{ $sale->email }}</td>
                        <td class="text-right">{{ number_format($sale->commission, 2, ',', '.') }}</td>
                        <td class="text-right">{{ number_format($sale->value, 2, ',', '.') }}</td>
                        <td class="text-left">{{ date_format(date_create($sale->date), "d/m/Y") }}</td>
                    <tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection