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
            20 => 
            array (
                'id' => 21,
                'name' => 'Aturan 21',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Aturan 22',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Aturan 23',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Aturan 24',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Aturan 25',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:35:45',
                'updated_at' => '2019-11-12 11:35:45',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Aturan 26',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Aturan 27',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Aturan 28',
                'game_id' => 3,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Aturan 29',
                'game_id' => 4,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Aturan 30',
                'game_id' => 4,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Aturan 31',
                'game_id' => 5,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Aturan 32',
                'game_id' => 5,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Aturan 33',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Aturan 34',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:42:32',
                'updated_at' => '2019-11-12 11:42:32',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Aturan 35',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Aturan 36',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Aturan 37',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:45:05',
                'updated_at' => '2019-11-12 11:45:05',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Aturan 38',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Aturan 39',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:46:43',
                'updated_at' => '2019-11-12 11:46:43',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Aturan 40',
                'game_id' => 6,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
        ));
        
        
    }
}