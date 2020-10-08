@extends('layouts.users.app')

@section('content')


<div class="container marketing">
    <div class="row">
       <!-- <div class="col-lg-4">
            <img src=" {{ route('products.create') }}" class="image">
            <h2>Camisa para Hombre</h2>
            <h3>$ 120.000</h2>
        </div>-->

        <div>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" file="true">
                       @csrf
	                   	<br>	
	                   	<div class="form-group">
	                   		<label for="">Nombre del Producto</label>
	                   		<input type="text" name="product_name" class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Descripción</label>
	                   		<input type="text" name="description" class="form-control" required="">
	                    </div>
	                    <div class="form-group">
	                   		<label for="">Precio</label>
	                   		<input type="number" name="price" class="form-control" required="">
	                    </div>
	                    <div class="form-group">
	                   		<label for="">Imagen del Producto</label>
	                   		<input type="file" name="image50" class="form-control" required="">
	                    </div>
	                   	<br>
	                   	<button class="btn btn-primary" type="submit">Registrar Producto</button>
	                   	
	                   </form>
	                   <br>
					</div>

</div>
@endsection 
