@extends('layouts.users.app')

@section('content')


<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <img src="/assets/img/hombre/polo_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Camisa Polo</h2>
            <h3>$ 50.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <img src="/assets/img/hombre/chaqueta_invierno_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Chaqueta Invierno</h2>
            <h3>$ 70.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <img src="/assets/img/hombre/chamarra_jean_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Chamarra de Jean</h2>
            <h3>$ 50.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/hombre/beisbolera_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Beisbolera</h2>
            <h3>$ 80.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/hombre/playera_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Playera</h2>
            <h3>$ 40.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/hombre/conjunto_sudadera_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Conjunto Sudadera</h2>
            <h3>$ 120.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/hombre/chamarra_cuero_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Chamarra de Cuero</h2>
            <h3>$ 150.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/hombre/conjunto_fiesta_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Conjunto Fiesta</h2>
            <h3>$ 100.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/hombre/pantaloneta_hombre.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Pantaloneta</h2>
            <h3>$ 30.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
    </div>
</div>


@endsection