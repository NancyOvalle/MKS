@extends('layouts.users.app')

@section('content')

@php
use App\Models\Product;
$products=Product::all();
@endphp

<div class="container">
    <div class="row">
        <div class="col lg-4">
            @foreach($products as $product)
            <img src="{{ asset('storage').'/'.$product->image}}" width="250"  height="250" style="border-radius: 100%;">
            <div class="card">
                <div class="card-body">
                    <h2><strong style="color: blue">{{$product->product_name}}</strong></h2>
                    <h3><strong style="color: green">$ {{$product->price}}</strong></h3>
                    <h3>{{$product->description}}</h3>
                    <button class="btn btn-danger" id="agregar">
                      <i class="fas fa-cart-arrow-down"></i>Añadir al Carrito
                    </button>
                </div>
                
            </div>
    
            @endforeach

        </div>
    </div>
</div>

@endsection 