@extends('layouts.main')
@section('title', 'Spike store - Cadastro de vendedor')

@section('content')
<div id="container">
    <div id="container-header">
        <h1>Cadastro de vendedor</h1>
    </div>
    <form id="form-seller" method="POST" action="#">
        @csrf
        <input type="text" id="seller_name" name="seller_name" placeholder="Nome">
        <input type="text" id="seller_email" name="seller_email" placeholder="E-mail">
        <button class="btn btn-large btn-green bold" type="submit">Cadastrar</button>
    </form>
</div>
@endsection