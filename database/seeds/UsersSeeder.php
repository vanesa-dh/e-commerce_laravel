<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      DB::table('users') -> insert(
          [
          'name' => 'Administrador',
          'user_name' => 'admin',
          'email' => 'admin@gmail.com',
          'country' => 'Argentina',
          'province' => 'Buenos Aires',
          'profile_photo' => NULL,
          'email_verified_at' => now(),
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
          'remember_token' => Str::random(10),
          ]);

        DB::table('users') -> insert(
            [
            'name' => 'Johanna',
            'user_name' => 'johanna',
            'email' => 'johanna@gmail.com',
            'country' => 'Argentina',
            'province' => 'Capital Federal',
            'profile_photo' => NULL,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            ]);

        DB::table('users') -> insert(
            [
            'name' => 'Elisabeth',
            'user_name' => 'Ely',
            'email' => 'ely@gmail.com',
            'country' => 'Argentina',
            'province' => 'Buenos Aires',
            'profile_photo' => NULL,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            ]);

          DB::table('users') -> insert(
              [
              'name' => 'Vanesa',
              'user_name' => 'vanesa',
              'email' => 'vane@gmail.com',
              'country' => 'Argentina',
              'province' => 'Buenos Aires',
              'profile_photo' => NULL,
              'email_verified_at' => now(),
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
              'remember_token' => Str::random(10),
              ]);
    }
}
