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

    public function index(Request $request){

        // Esto mantiene persistencia en el campo buscador y en el select
        $buscador = $request->input('buscador');
        $categoriaSeleccionada = $request->input('categoria');

        // Si categoria y No buscador = filtro por categoria:
        if ($categoriaSeleccionada && !$buscador ) {
          $products = Product::where("category_id","=",$categoriaSeleccionada)->paginate(6);
        // Si categoria y Si buscador = filtro por categoria y palabra clave:
        } elseif ($categoriaSeleccionada && $buscador) {
          $products = Product::where("category_id","=",$categoriaSeleccionada)
                              ->where("name", "like", "%" . $buscador . "%")
                              ->paginate(6);
        // No categoria y Si buscador = filtro por categoria y palabra clave:
        } elseif (!$categoriaSeleccionada && $buscador) {
          $products = Product::where("name","like", "%" . $buscador . "%")
                              ->paginate(6);
        }
        else {
          // No categoria y No buscador = todos
          $products = Product::paginate(6);
        }

        // Carga la lista de categorias
        $categorias = Category::all();

        // Esto me muestra en el server corriendo la variable $categorias a chequear si enviar bien los datos
        // $output = new \Symfony\Component\Console\Output\ConsoleOutput();
        // $output->writeln($categoriaSeleccionada);

        return view('productos', compact('products', 'categorias', 'buscador', 'categoriaSeleccionada')
        );
    }

    public function addToCart(Request $request){

      // $idProducto = $request[session][id];
      $idProducto = $request['id'];
      // dd($request);

      // $output = new \Symfony\Component\Console\Output\ConsoleOutput();
      // $output->writeln($categoriaSeleccionada);

      return redirect('detalles/{ $idProducto }');

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
    public function deleteProduct()
    {
      $products = Product::all();
      return view('eliminar', compact('products'));
    }

    public function destroy(Request $request)
    {
      Product::destroy($request['product']);
      return redirect('productos');
    }


}
