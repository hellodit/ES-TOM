<?php

use Illuminate\Database\Seeder;

class VariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variables = [
            'Usia', 'Modalitas Belajar','Nilai Agama dan Moral','Fisik Motorik','Kognitif','Bahasa','Sosial Emosional','Kelompok Permainan'
        ];

        for ($i=0; $i < count($variables); $i++) {
            App\Models\Variable::create([
                'name'  => $variables[$i]
            ]);
        }

    }
}
