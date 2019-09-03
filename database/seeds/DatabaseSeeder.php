<?php

use Illuminate\Database\Seeder;
use App\Models\Categories;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(UserParentsSeeder::class);
    }
}
