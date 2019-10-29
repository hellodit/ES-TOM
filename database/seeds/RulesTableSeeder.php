<?php

use Illuminate\Database\Seeder;

class RulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rules')->delete();
        
        \DB::table('rules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aturan 1',
                'game_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aturan 2',
                'game_id' => 1,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Aturan 3',
                'game_id' => 1,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Aturan 4',
                'game_id' => 1,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Aturan 5',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Aturan 6',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Aturan 7',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Aturan 8',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Aturan 9',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Aturan 10',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Aturan 11',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Aturan 12',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Aturan 13',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Aturan 14',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Aturan 15',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Aturan 16',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Aturan 17',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Aturan 18',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Aturan 19',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Aturan 20',
                'game_id' => 2,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
        ));
        
        
    }
}