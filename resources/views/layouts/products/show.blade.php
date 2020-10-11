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
            <div class="card"style="margin-right: .75em; margin-left: 20em; margin-top: -250px;">
                <div class="card-body">
                    <h2><strong style="color: blue">{{$product->product_name}}</strong></h2>
                    <h3><strong style="color: green">$ {{$product->price}}</strong></h3>
                    <h4>{{$product->description}}</h4>
                    <br>
                    <button class="btn btn-danger">
                      <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
                    </button>
                    <div class="mt-4">{{ __('Cantidad') }}
                   <input type="number" class="form-control" id="cantidadProducto" value="1" style="width: 15%;">
                   </div>
                   <br>
                   <a class="btn btn-outline-success" href="{{ route('home')}}">{{ __('Cancelar') }}</a>
                </div>                
            </div>
    
            @endforeach

        </div>
    </div>
</div>

@endsection 