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


        \DB::table('Rules')->delete();

        \DB::table('Rules')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Aturan 1',
                'game_id' => 1,
                'created_at' => '2019-10-22 03:52:20',
                'updated_at' => '2019-10-22 03:52:20',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Aturan 2',
                'game_id' => 1,
                'created_at' => '2019-10-22 03:53:02',
                'updated_at' => '2019-10-22 03:53:02',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Aturan 3',
                'game_id' => 1,
                'created_at' => '2019-10-22 03:53:54',
                'updated_at' => '2019-10-22 03:53:54',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Aturan 4',
                'game_id' => 1,
                'created_at' => '2019-10-22 03:54:41',
                'updated_at' => '2019-10-22 03:54:41',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Aturan 5',
                'game_id' => 2,
                'created_at' => '2019-10-22 04:12:21',
                'updated_at' => '2019-10-22 04:12:21',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Aturan 6',
                'game_id' => 2,
                'created_at' => '2019-10-22 04:13:07',
                'updated_at' => '2019-10-22 04:13:07',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Aturan 7',
                'game_id' => 2,
                'created_at' => '2019-10-22 04:15:39',
                'updated_at' => '2019-10-22 04:15:39',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Aturan 8',
                'game_id' => 2,
                'created_at' => '2019-10-22 04:17:09',
                'updated_at' => '2019-10-22 04:17:09',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Aturan 9',
                'game_id' => 2,
                'created_at' => '2019-10-22 04:18:03',
                'updated_at' => '2019-10-22 04:18:03',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Aturan 10',
                'game_id' => 2,
                'created_at' => '2019-10-22 04:22:36',
                'updated_at' => '2019-10-22 04:22:36',
            ),
        ));


    }
}
