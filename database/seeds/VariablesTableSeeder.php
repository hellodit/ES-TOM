<?php

use Illuminate\Database\Seeder;

class VariablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('variables')->delete();
        
        \DB::table('variables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Usia',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Modalitas Belajar',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nilai Agama dan Moral',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Fisik Motorik',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kognitif',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bahasa',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Sosial Emosional',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Kelompok Permainan',
                'created_at' => '2019-10-24 06:03:58',
                'updated_at' => '2019-10-24 06:03:58',
            ),
        ));
        
        
    }
}