<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        DB::table('categories') -> insert([
          'category' => 'Vestimenta'
        ]);

        DB::table('categories') -> insert([
          'category' => 'Accesorios'
        ]);

        DB::table('categories') -> insert([
          'category' => 'Zapatos'
        ]);

    }
}
