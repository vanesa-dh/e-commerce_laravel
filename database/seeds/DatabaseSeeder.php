<?php

use App\Product;
use App\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(Product::class)->times(10)->create();
        // factory(User::class)->times(10)->create();

        $this->call(CategorySeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
