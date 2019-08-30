<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Esta funcion me trae todos los productos:
    // public function index(){
    //     $products = Product::all();
    //     return view('productos', compact('products'));
    // }

    public function index(){
        $products = Product::paginate(6);
        $categorias = Category::all();

        $vestimenta = Product::where("category_id","=",1);
        $accesorios = Product::where("category_id","=",2);
        $zapatos = Product::where("category_id","=",3);

        return view('productos', compact('products', 'categorias','vestimenta','accesorios', 'zapatos')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function addProduct()
     {
         $categories = Category::all();
         return view('agregarProducto', compact('categories'));
     }

    public function store(Request $request)
    {
      $reglas = [
        'name' => 'string|unique:products,name|required',
        'image' => 'file|required',
        'price' => 'numeric|required',
        'category' => 'required'
      ];
      $mensajes = [
        'string' => 'El campo debe ser un texto',
        'numeric' => 'El campo debe ser numérico',
        'required' => 'El campo es obligatorio'
      ];

      $this->validate($request, $reglas, $mensajes);

      $product = new Product();
      $product->name = $request['name'];
      $ruta = $request->file('image')->store('public/products');
      $imageName = basename($ruta);
      $product->image = $imageName;
      $product->price = $request['price'];
      $product->category_id = $request['category'];
      $product-> save();
      return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productToShow = Product::find($id);
        return view('detalles', compact("productToShow"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }


}
