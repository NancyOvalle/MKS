<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('layouts.products.create');
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$products=request()->all();

        $products=request()->except('_token');

        if($request->hasfile('image')){
            
            $products['image']=$request->file('image')->store('imagenes','public');
        }

        Product::insert($products);

        return view('home');
        
        
 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        Product::find($id);

        return view('layouts.products.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Product::find($id);

      
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return view('home');
    }

    public function cart()
    {
        
        return view('layouts.products.cart');
    }
    
    public function addtocart($id)
    {
        $product=Product::find($id);
        $cart= session()->get('products.cart');

        if(!$cart){
            $cart=[
                $id=>[
                    "name"=>$product->product_name,
                    "quantity"=>1,
                    "price"=>$product->price,
                    "image"=>$product->image
                ]
                ];
                session()->put('products.cart', $cart);
                return redirect()->back()->with('succes', 'Producto añadido correctamente');
        }
        if(isset($cart[$id])){
            $cart [$id]['quantity']++;
            session()->put('products.cart',$cart);
            return redirect()->back()->with('succes', 'Producto añadido correctamente');

        }
        $cart[$id]=[
            "name"=>$product->product_name,
            "quantity"=>1,
            "price"=>$product->price,
            "image"=>$product->image
        ];
        session()->put('products.cart',$cart);
        return redirect()->back()->with('succes', 'Producto añadido correctamente');


    }
}
