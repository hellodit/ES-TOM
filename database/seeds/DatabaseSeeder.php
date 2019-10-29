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
        $this->call(UserParentsSeeder::class);
        $this->call(VariableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(ParametersTableSeeder::class);
        $this->call(RulesTableSeeder::class);
        $this->call(ParameterRuleTableSeeder::class);
        $this->call(VariablesTableSeeder::class);
    }
}
