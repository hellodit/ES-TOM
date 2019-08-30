<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Category::create([
            'name'  => 'Al-Qolam'
        ]);

        App\Models\Category::create([
            'name'  => 'Cordoba Kids'
        ]);

        App\Models\Category::create([
            'name'  => 'ETL-Learning'
        ]);
    }
}
