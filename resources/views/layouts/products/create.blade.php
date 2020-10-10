@extends('layouts.users.app')

@section('content')




        
<div class="container">    
    <div class="row">
        <div class="cold-md-4">  
			    <div>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
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
	                   		<input type="file" name="image" class="form-control" required="">
	                    </div>
	                   	<br>
						   <button class="btn btn-primary" type="submit">Registrar Producto</button>
						   <a href="{{ route('home')}}">{{ __('Cancelar') }}</a>
	                   	
	                </form>
	                   <br>
				</div>
            </div>
	</div>
</div>

@endsection 