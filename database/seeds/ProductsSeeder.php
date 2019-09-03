<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products') -> insert(
          [
          'name' => 'Vestido Casia',
          'image' => 'vestidocasia.jpg',
          'price' => 2200,
          'category_id' => 1
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Stilettos Black',
          'image' => 'zapatoselegantes.jpg',
          'price' => 3800,
          'category_id' => 3
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Sandalias Plateadas',
          'image' => 'sandaliasplateadas.jpg',
          'price' => 3600,
          'category_id' => 3
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Sandalias Black',
          'image' => 'sandaliasblack.jpg',
          'price' => 3600,
          'category_id' => 3
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Minibag Croco',
          'image' => 'rinionera.jpg',
          'price' => 650,
          'category_id' => 2
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Mochila Mini Black',
          'image' => 'mochila.jpg',
          'price' => 2200,
          'category_id' => 2
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Jean High Relax',
          'image' => 'jeanhighrelax.jpg',
          'price' => 2300,
          'category_id' => 1
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Collar Love',
          'image' => 'collar.jpg',
          'price' => 500,
          'category_id' => 2
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Gorra Cap',
          'image' => 'cap.jpg',
          'price' => 450,
          'category_id' => 2
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Campera Happen',
          'image' => 'camperahappen.jpg',
          'price' => 3800,
          'category_id' => 1
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Camisa Maki',
          'image' => 'camisamaki.jpg',
          'price' => 2100,
          'category_id' => 1
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Botas Croco',
          'image' => 'botacroco.jpg',
          'price' => 3900,
          'category_id' => 3
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Borcegos Alen',
          'image' => 'borcegoalen.jpg',
          'price' => 3400,
          'category_id' => 3
          ]);

      DB::table('products') -> insert(
          [
          'name' => 'Billetera Love',
          'image' => 'billetera.jpg',
          'price' => 650,
          'category_id' => 2
          ]);
    }
}
