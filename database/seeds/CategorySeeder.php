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
        // Category::insert([
        //   'category' -> 'Vestimenta'
        // ]);
        // Category::insert([
        //   'category' -> 'Accesorios'
        // ]);
        // Category::insert([
        //   'category' -> 'Zapatos'
        // ]);

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
