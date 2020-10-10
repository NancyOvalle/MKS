@extends('layouts.users.app')

@section('content')

@php
use App\Models\Product;
$products=Product::all();
@endphp
<div class="container marketing">
    <div class="row">

    @foreach($products as $product)
      <div class="col-lg-4">
        <img src="{{ asset('storage').'/'.$product->image}}" width="250"  height="250" style="border-radius: 100%;">
        <h2>{{$product->product_name}}</h2>
        <h3>$ {{$product->price}}</h3>    
        <p class="btn btn-info">Ver Detalles</p>
        <p class="btn btn-danger">Eliminar</p>    
      </div>

     @endforeach
    </div>
</div>


@endsection 
