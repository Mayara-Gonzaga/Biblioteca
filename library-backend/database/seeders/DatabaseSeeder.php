<?php

namespace Database\Seeders;

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
        // Chama o BooksTableSeeder para popular o banco de dados com livros
        $this->call(BooksTableSeeder::class);
    }
}