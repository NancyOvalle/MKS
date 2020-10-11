@extends('layouts.users.app')

@section('content')


<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <img src="/assets/img/niño/chaqueta_niña.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Chaqueta para Niña</h2>
            <h3>$ 40.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <img src="/assets/img/niño/conjunto_marinero_niña.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Conjunto Marinero</h2>
            <h3>$ 70.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <img src="/assets/img/niño/gabardina_niño.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Gabardina</h2>
            <h3>$ 60.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img//niño/falda_plizada_niña.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Falda Plizada</h2>
            <h3>$ 80.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/niño/vestido_niña.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Vestido para Niña</h2>
            <h3>$ 90.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/niño/polo_niño.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Camisa Polo</h2>
            <h3>$ 60.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/niño/sudadera_niño.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Sudadera Niño</h2>
            <h3>$ 70.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/niño/playero_niño.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Playera</h2>
            <h3>$ 100.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/niño/falda_unicornio_niña.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Falda Niña</h2>
            <h3>$ 30.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
    </div>
</div>


@endsection