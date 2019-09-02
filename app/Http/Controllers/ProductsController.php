<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use App\Purchase;


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

    public function llevaAlPanelABM(){
      $products = Product::all();
      //
    return view('vistaPanelABM', compact('products'));
    }


    public function leeElPost(Request $request){

      $id = $request->input('id');
      return redirect('/modificar/' . $id);

    }

    public function carrito(Request $request)
    {
      // $valorSesionActiva = $request->session()
      //                     ->get('key', function(){
      //                     return 'default';
      //                     });
      //
      // $output = new \Symfony\Component\Console\Output\ConsoleOutput();
      // $output->writeln($valorSesionActiva);
      if (auth()->user()) { //si hay un usuario loggeado...
        $userId = auth()->user()->id;
        $carts = Cart::all();
        foreach ($carts as $cart) {
          if ($cart->user_id == $userId && $cart->active == true) {
            $lastCart = $cart;
            return view('carrito', compact('lastCart'));
          } else {
            return view('carrito');
          }
        }
      } else {
        return view('carrito');
      }
    }

    public function addToCart(Request $request){
      $productToCart = Product::find($request['button']);
      $userId = auth()->user()->id;
      $carts = Cart::all();
      $total = 0;
      foreach ($carts as $cart) {
        if ($cart->user_id == $userId && $cart->active == true) {
          $lastCart = $cart;
        }
      }
        if (!isset($lastCart)) { //pregunto si no existe algun carrito del usuario, para crearle uno
          $lastCart = new Cart;
          $lastCart->user_id = $userId;
          $lastCart->active = true;
          $lastCart->save();
          $lastCart->products()->attach($productToCart->id);
          $total = $total + $productToCart->price;
        } else { //en caso de que ya tenga, me quedo con el activo
          $lastCart->products()->attach($productToCart->id);
          $total = $total + $productToCart->price;
        }
      // if ($cart->active == true){ //si ya hay un carrito activo
      //   $cart->$productToCart->attach($product_id, $cart_id);
      // } else { //si no lo hay
      //   $cart = new Cart;
      //   $cart->user_id = $userId;
      //   $cart->active = true;
      //   $cart->save();
      //   $cart->$productToCart->attach($product_id, $cart_id);
      // }
      return view('carrito', compact('total'));
    }

    public function deleteFromCart(Request $request)
    {
      $productToDelete = Product::find($request['button']);
      $userId = auth()->user()->id;
      $carts = Cart::all();
      foreach ($carts as $cart) {
        if ($cart->user_id == $userId && $cart->active == true) {
          $lastCart = $cart;
        }
      }
      $lastCart->products()->detach($productToDelete->id);
      return redirect('carrito');
    }

    public function comprar(Request $request)
    {
      $cart = Cart::where('id', $request['button'])->first();
      $cart->active = false;
      $cart->save();
      $purchase = new Purchase;
      $purchase->user_id = auth()->user()->id;
      $purchase->cart_id = $cart->id;
      $now = new \DateTime();
      $purchase->date = $now->format('Y-m-d');
      $purchase->total = 65;
      $purchase->save();
      return redirect('/');
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
      $product = Product::find($id);
      $categories = Category::all();
      return view('modificar', compact('product', 'categories'));
    }


    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $reglas = [
        'nombre' => 'string',
        'imagen' => 'file',
        'precio' => 'numeric',
      ];
      $mensajes = [
        'string' => 'El campo debe ser un texto',
        'numeric' => 'El campo debe ser numérico',
      ];

      $this->validate($request, $reglas, $mensajes);

      $product->name = $request->input('name');
      if ($request->file('image') != null) {
        $ruta = $request->file('image')->store('public/products');
        $imageName = basename($ruta);
        $product->image = $imageName;
      }
      $product->price = $request->input('price');
      $product->category_id = $request->input('category');
      $product->save();

    return redirect('/productos');
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
