@extends('layouts.main')
@section('title', 'Spike store - Atualização de vendedor')

@section('content')
<div id="container">
    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif
    <div id="container-header">
        <h1>Atualização de vendedor</h1>
    </div>
    <form id="form" method="POST" action="/v1/seller/update">
        @csrf
        <input type="hidden" id="seller_id" name="seller_id" value="{{ $seller->seller_id }}">
        <input type="text" id="seller_name" name="seller_name" value="{{ $seller->name }}" placeholder="Nome">
        <input type="text" id="seller_email" name="seller_email" value="{{ $seller->email }}" placeholder="E-mail">
        <button class="btn btn-large btn-green btn-rounded bold" type="submit">Atualizar</button>
    </form>
</div>
@endsection