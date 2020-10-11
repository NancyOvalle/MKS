@extends('layouts.users.app')

@section('content')


<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <img src="/assets/img/mujer/buzo_cuello_alto_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Buzo Cuello Alto</h2>
            <h3>$ 40.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <img src="/assets/img/mujer/jean_bota_campana.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Jean Bota Campana</h2>
            <h3>$ 70.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <img src="/assets/img/mujer/overol_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Overol Dama</h2>
            <h3>$ 60.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/mujer/gaban_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Gaban Dama</h2>
            <h3>$ 80.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/mujer/chamarra_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Chamarra</h2>
            <h3>$ 90.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/mujer/vestido_noche_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Vestido Noche</h2>
            <h3>$ 120.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/mujer/conjunto_sudadera_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Conjunto Sudadera</h2>
            <h3>$ 120.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/mujer/jean_tiro_alto_negro.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Jean Tiro Alto</h2>
            <h3>$ 100.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
        <div class="col-lg-4">
            <br>
            <img src="/assets/img/mujer/short_dama.gif"  width="250"  height="250" style="border-radius: 100%;">
            <h2>Short</h2>
            <h3>$ 80.000</h2>
            <button class="btn btn-danger">
                 <a href="{{ route('products.cart')}}"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>{{ __('Añadir al Carrito') }}
            </button>
        </div>
    </div>
</div>


@endsection