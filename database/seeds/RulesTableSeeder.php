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
            40 => 
            array (
                'id' => 41,
                'name' => 'Aturan 41',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:21:48',
                'updated_at' => '2019-11-18 00:21:48',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Aturan 42',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:22:30',
                'updated_at' => '2019-11-18 00:22:30',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Aturan 43',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:23:05',
                'updated_at' => '2019-11-18 00:23:05',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Aturan 44',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:24:05',
                'updated_at' => '2019-11-18 00:24:05',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Aturan 45',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:25:12',
                'updated_at' => '2019-11-18 00:25:12',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Aturan 46',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:25:41',
                'updated_at' => '2019-11-18 00:25:41',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Aturan 47',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:26:33',
                'updated_at' => '2019-11-18 00:26:33',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Aturan 48',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:27:13',
                'updated_at' => '2019-11-18 00:27:13',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Aturan 49',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:28:00',
                'updated_at' => '2019-11-18 00:28:00',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Aturan 50',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:28:52',
                'updated_at' => '2019-11-18 00:28:52',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Aturan 51',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:29:49',
                'updated_at' => '2019-11-18 00:29:49',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Aturan 52',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:30:24',
                'updated_at' => '2019-11-18 00:30:24',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Aturan 53',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:31:00',
                'updated_at' => '2019-11-18 00:31:00',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Aturan 54',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:31:39',
                'updated_at' => '2019-11-18 00:31:39',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Aturan 55',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:32:20',
                'updated_at' => '2019-11-18 00:32:20',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Aturan 56',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:33:15',
                'updated_at' => '2019-11-18 00:33:15',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Aturan 57',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:33:46',
                'updated_at' => '2019-11-18 00:33:46',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Aturan 58',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:34:25',
                'updated_at' => '2019-11-18 00:34:25',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Aturan 59',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:35:01',
                'updated_at' => '2019-11-18 00:35:01',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Aturan 60',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:35:31',
                'updated_at' => '2019-11-18 00:35:31',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Aturan 61',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:36:06',
                'updated_at' => '2019-11-18 00:36:06',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Aturan 62',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:36:46',
                'updated_at' => '2019-11-18 00:36:46',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Aturan 63',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:37:34',
                'updated_at' => '2019-11-18 00:37:34',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Aturan 64',
                'game_id' => 6,
                'created_at' => '2019-11-18 00:38:15',
                'updated_at' => '2019-11-18 00:38:15',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Aturan 65',
                'game_id' => 7,
                'created_at' => '2019-11-18 00:38:47',
                'updated_at' => '2019-11-18 00:38:47',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Aturan 66',
                'game_id' => 7,
                'created_at' => '2019-11-18 00:39:17',
                'updated_at' => '2019-11-18 00:39:17',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Aturan 67',
                'game_id' => 8,
                'created_at' => '2019-11-18 00:40:10',
                'updated_at' => '2019-11-18 00:41:11',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Aturan 68',
                'game_id' => 8,
                'created_at' => '2019-11-18 00:40:43',
                'updated_at' => '2019-11-18 00:40:43',
            ),
        ));
        
        
    }
}