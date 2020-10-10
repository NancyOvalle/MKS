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
        <br>
        <img src="{{ asset('storage').'/'.$product->image}}" width="250"  height="250" style="border-radius: 100%;">
        <h2>{{$product->product_name}}</h2>
        <h3>$ {{$product->price}}</h3> 
        <form method="POST" action="{{ route('products.destroy',$product->id)}}">
        @csrf
        @method('DELETE')   
        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">{{ __('Ver Detalles') }}</a>
        <button class="btn btn-danger">{{ __('Eliminar') }}</button>
        
        </form>
      </div>

     @endforeach
    </div>
</div>


@endsection 
