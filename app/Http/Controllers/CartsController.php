<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartsController extends Controller
{

    public function index(Request $request)
    {
      // $valorSesionActiva = $request->session()
      //                     ->get('key', function(){
      //                     return 'default';
      //                     });
      //
      // $output = new \Symfony\Component\Console\Output\ConsoleOutput();
      // $output->writeln($valorSesionActiva);
      if (auth()->user() != null) {
        $userId = auth()->user()->id;
        $cart = Cart::where('user_id', $userId)->latest()->first();
        if ($cart->active == true) {
          return view('carrito', compact($cart));
        }else {
          return view('carrito');
        }
      }else {
        return view('carrito');
      }
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

      //

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
