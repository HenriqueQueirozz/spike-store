@extends('layouts.main')
@section('title', 'Spike store - Cadastro de vendedor')

@section('content')
<div id="container">
    <div id="container-header">
        <h1>Cadastro de vendedor</h1>
    </div>
    <form id="form-seller" method="POST" action="#">
        @csrf
        <select id="seller_id" name="seller_id">
            @foreach($sellers as $seller)
                <option value="{ $seller->seller_id }}">{{ $seller->name }}</option>
            @endforeach
        </select>
        <input type="text" id="seller_name" name="seller_name" placeholder="Nome">
        <input type="text" id="seller_email" name="seller_email" placeholder="E-mail">
        <button class="btn btn-large btn-green bold" type="submit">Cadastrar</button>
    </form>
</div>
@endsection