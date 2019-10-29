<?php

use Illuminate\Database\Seeder;

class ParameterRuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parameter_rule')->delete();
        
        \DB::table('parameter_rule')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parameter_id' => 1,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            1 => 
            array (
                'id' => 2,
                'parameter_id' => 5,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            2 => 
            array (
                'id' => 3,
                'parameter_id' => 9,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            3 => 
            array (
                'id' => 4,
                'parameter_id' => 12,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            4 => 
            array (
                'id' => 5,
                'parameter_id' => 14,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            5 => 
            array (
                'id' => 6,
                'parameter_id' => 18,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            6 => 
            array (
                'id' => 7,
                'parameter_id' => 22,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            7 => 
            array (
                'id' => 8,
                'parameter_id' => 26,
                'rule_id' => 1,
                'created_at' => '2019-10-29 07:22:21',
                'updated_at' => '2019-10-29 07:22:21',
            ),
            8 => 
            array (
                'id' => 9,
                'parameter_id' => 2,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            9 => 
            array (
                'id' => 10,
                'parameter_id' => 5,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            10 => 
            array (
                'id' => 11,
                'parameter_id' => 9,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            11 => 
            array (
                'id' => 12,
                'parameter_id' => 12,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            12 => 
            array (
                'id' => 13,
                'parameter_id' => 14,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            13 => 
            array (
                'id' => 14,
                'parameter_id' => 18,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            14 => 
            array (
                'id' => 15,
                'parameter_id' => 22,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            15 => 
            array (
                'id' => 16,
                'parameter_id' => 26,
                'rule_id' => 2,
                'created_at' => '2019-10-29 07:23:07',
                'updated_at' => '2019-10-29 07:23:07',
            ),
            16 => 
            array (
                'id' => 17,
                'parameter_id' => 1,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            17 => 
            array (
                'id' => 18,
                'parameter_id' => 5,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            18 => 
            array (
                'id' => 19,
                'parameter_id' => 9,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            19 => 
            array (
                'id' => 20,
                'parameter_id' => 12,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            20 => 
            array (
                'id' => 21,
                'parameter_id' => 14,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            21 => 
            array (
                'id' => 22,
                'parameter_id' => 19,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            22 => 
            array (
                'id' => 23,
                'parameter_id' => 22,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            23 => 
            array (
                'id' => 24,
                'parameter_id' => 26,
                'rule_id' => 3,
                'created_at' => '2019-10-29 07:23:52',
                'updated_at' => '2019-10-29 07:23:52',
            ),
            24 => 
            array (
                'id' => 25,
                'parameter_id' => 2,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            25 => 
            array (
                'id' => 26,
                'parameter_id' => 5,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            26 => 
            array (
                'id' => 27,
                'parameter_id' => 9,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            27 => 
            array (
                'id' => 28,
                'parameter_id' => 12,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            28 => 
            array (
                'id' => 29,
                'parameter_id' => 14,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            29 => 
            array (
                'id' => 30,
                'parameter_id' => 19,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            30 => 
            array (
                'id' => 31,
                'parameter_id' => 22,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            31 => 
            array (
                'id' => 32,
                'parameter_id' => 26,
                'rule_id' => 4,
                'created_at' => '2019-10-29 07:24:41',
                'updated_at' => '2019-10-29 07:24:41',
            ),
            32 => 
            array (
                'id' => 33,
                'parameter_id' => 2,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            33 => 
            array (
                'id' => 34,
                'parameter_id' => 5,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            34 => 
            array (
                'id' => 35,
                'parameter_id' => 9,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            35 => 
            array (
                'id' => 36,
                'parameter_id' => 12,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            36 => 
            array (
                'id' => 37,
                'parameter_id' => 16,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            37 => 
            array (
                'id' => 38,
                'parameter_id' => 18,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            38 => 
            array (
                'id' => 39,
                'parameter_id' => 23,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            39 => 
            array (
                'id' => 40,
                'parameter_id' => 26,
                'rule_id' => 5,
                'created_at' => '2019-10-29 07:25:13',
                'updated_at' => '2019-10-29 07:25:13',
            ),
            40 => 
            array (
                'id' => 41,
                'parameter_id' => 2,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            41 => 
            array (
                'id' => 42,
                'parameter_id' => 5,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            42 => 
            array (
                'id' => 43,
                'parameter_id' => 9,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            43 => 
            array (
                'id' => 44,
                'parameter_id' => 12,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            44 => 
            array (
                'id' => 45,
                'parameter_id' => 16,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            45 => 
            array (
                'id' => 46,
                'parameter_id' => 19,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            46 => 
            array (
                'id' => 47,
                'parameter_id' => 23,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            47 => 
            array (
                'id' => 48,
                'parameter_id' => 26,
                'rule_id' => 6,
                'created_at' => '2019-10-29 07:27:56',
                'updated_at' => '2019-10-29 07:27:56',
            ),
            48 => 
            array (
                'id' => 49,
                'parameter_id' => 2,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            49 => 
            array (
                'id' => 50,
                'parameter_id' => 5,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            50 => 
            array (
                'id' => 51,
                'parameter_id' => 9,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            51 => 
            array (
                'id' => 52,
                'parameter_id' => 13,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            52 => 
            array (
                'id' => 53,
                'parameter_id' => 16,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            53 => 
            array (
                'id' => 54,
                'parameter_id' => 18,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            54 => 
            array (
                'id' => 55,
                'parameter_id' => 23,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            55 => 
            array (
                'id' => 56,
                'parameter_id' => 26,
                'rule_id' => 7,
                'created_at' => '2019-10-29 07:28:35',
                'updated_at' => '2019-10-29 07:28:35',
            ),
            56 => 
            array (
                'id' => 57,
                'parameter_id' => 2,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            57 => 
            array (
                'id' => 58,
                'parameter_id' => 5,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            58 => 
            array (
                'id' => 59,
                'parameter_id' => 9,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            59 => 
            array (
                'id' => 60,
                'parameter_id' => 13,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            60 => 
            array (
                'id' => 61,
                'parameter_id' => 16,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            61 => 
            array (
                'id' => 62,
                'parameter_id' => 19,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            62 => 
            array (
                'id' => 63,
                'parameter_id' => 23,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            63 => 
            array (
                'id' => 64,
                'parameter_id' => 26,
                'rule_id' => 8,
                'created_at' => '2019-10-29 07:29:11',
                'updated_at' => '2019-10-29 07:29:11',
            ),
            64 => 
            array (
                'id' => 65,
                'parameter_id' => 2,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            65 => 
            array (
                'id' => 66,
                'parameter_id' => 6,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            66 => 
            array (
                'id' => 67,
                'parameter_id' => 9,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            67 => 
            array (
                'id' => 68,
                'parameter_id' => 12,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            68 => 
            array (
                'id' => 69,
                'parameter_id' => 16,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            69 => 
            array (
                'id' => 70,
                'parameter_id' => 18,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            70 => 
            array (
                'id' => 71,
                'parameter_id' => 23,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            71 => 
            array (
                'id' => 72,
                'parameter_id' => 26,
                'rule_id' => 9,
                'created_at' => '2019-10-29 07:29:58',
                'updated_at' => '2019-10-29 07:29:58',
            ),
            72 => 
            array (
                'id' => 73,
                'parameter_id' => 2,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            73 => 
            array (
                'id' => 74,
                'parameter_id' => 6,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            74 => 
            array (
                'id' => 75,
                'parameter_id' => 9,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            75 => 
            array (
                'id' => 76,
                'parameter_id' => 12,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            76 => 
            array (
                'id' => 77,
                'parameter_id' => 16,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            77 => 
            array (
                'id' => 78,
                'parameter_id' => 19,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            78 => 
            array (
                'id' => 79,
                'parameter_id' => 23,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            79 => 
            array (
                'id' => 80,
                'parameter_id' => 26,
                'rule_id' => 10,
                'created_at' => '2019-10-29 07:30:35',
                'updated_at' => '2019-10-29 07:30:35',
            ),
            80 => 
            array (
                'id' => 81,
                'parameter_id' => 2,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            81 => 
            array (
                'id' => 82,
                'parameter_id' => 6,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            82 => 
            array (
                'id' => 83,
                'parameter_id' => 9,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            83 => 
            array (
                'id' => 84,
                'parameter_id' => 13,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            84 => 
            array (
                'id' => 85,
                'parameter_id' => 16,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            85 => 
            array (
                'id' => 86,
                'parameter_id' => 18,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            86 => 
            array (
                'id' => 87,
                'parameter_id' => 23,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            87 => 
            array (
                'id' => 88,
                'parameter_id' => 26,
                'rule_id' => 11,
                'created_at' => '2019-10-29 07:31:25',
                'updated_at' => '2019-10-29 07:31:25',
            ),
            88 => 
            array (
                'id' => 89,
                'parameter_id' => 2,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            89 => 
            array (
                'id' => 90,
                'parameter_id' => 6,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            90 => 
            array (
                'id' => 91,
                'parameter_id' => 9,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            91 => 
            array (
                'id' => 92,
                'parameter_id' => 13,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            92 => 
            array (
                'id' => 93,
                'parameter_id' => 16,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            93 => 
            array (
                'id' => 94,
                'parameter_id' => 19,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            94 => 
            array (
                'id' => 95,
                'parameter_id' => 23,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            95 => 
            array (
                'id' => 96,
                'parameter_id' => 26,
                'rule_id' => 12,
                'created_at' => '2019-10-29 07:32:26',
                'updated_at' => '2019-10-29 07:32:26',
            ),
            96 => 
            array (
                'id' => 97,
                'parameter_id' => 3,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            97 => 
            array (
                'id' => 98,
                'parameter_id' => 5,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            98 => 
            array (
                'id' => 99,
                'parameter_id' => 9,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            99 => 
            array (
                'id' => 100,
                'parameter_id' => 12,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            100 => 
            array (
                'id' => 101,
                'parameter_id' => 16,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            101 => 
            array (
                'id' => 102,
                'parameter_id' => 18,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            102 => 
            array (
                'id' => 103,
                'parameter_id' => 23,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            103 => 
            array (
                'id' => 104,
                'parameter_id' => 26,
                'rule_id' => 13,
                'created_at' => '2019-10-29 07:33:08',
                'updated_at' => '2019-10-29 07:33:08',
            ),
            104 => 
            array (
                'id' => 105,
                'parameter_id' => 3,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            105 => 
            array (
                'id' => 106,
                'parameter_id' => 5,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            106 => 
            array (
                'id' => 107,
                'parameter_id' => 9,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            107 => 
            array (
                'id' => 108,
                'parameter_id' => 12,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            108 => 
            array (
                'id' => 109,
                'parameter_id' => 16,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            109 => 
            array (
                'id' => 110,
                'parameter_id' => 19,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            110 => 
            array (
                'id' => 111,
                'parameter_id' => 23,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            111 => 
            array (
                'id' => 112,
                'parameter_id' => 26,
                'rule_id' => 14,
                'created_at' => '2019-10-29 07:33:54',
                'updated_at' => '2019-10-29 07:33:54',
            ),
            112 => 
            array (
                'id' => 113,
                'parameter_id' => 3,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            113 => 
            array (
                'id' => 114,
                'parameter_id' => 5,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            114 => 
            array (
                'id' => 115,
                'parameter_id' => 9,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            115 => 
            array (
                'id' => 116,
                'parameter_id' => 13,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            116 => 
            array (
                'id' => 117,
                'parameter_id' => 16,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            117 => 
            array (
                'id' => 118,
                'parameter_id' => 18,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            118 => 
            array (
                'id' => 119,
                'parameter_id' => 23,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            119 => 
            array (
                'id' => 120,
                'parameter_id' => 26,
                'rule_id' => 15,
                'created_at' => '2019-10-29 07:34:41',
                'updated_at' => '2019-10-29 07:34:41',
            ),
            120 => 
            array (
                'id' => 121,
                'parameter_id' => 3,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            121 => 
            array (
                'id' => 122,
                'parameter_id' => 5,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            122 => 
            array (
                'id' => 123,
                'parameter_id' => 9,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            123 => 
            array (
                'id' => 124,
                'parameter_id' => 13,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            124 => 
            array (
                'id' => 125,
                'parameter_id' => 16,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            125 => 
            array (
                'id' => 126,
                'parameter_id' => 19,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            126 => 
            array (
                'id' => 127,
                'parameter_id' => 23,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            127 => 
            array (
                'id' => 128,
                'parameter_id' => 26,
                'rule_id' => 16,
                'created_at' => '2019-10-29 07:35:32',
                'updated_at' => '2019-10-29 07:35:32',
            ),
            128 => 
            array (
                'id' => 129,
                'parameter_id' => 3,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            129 => 
            array (
                'id' => 130,
                'parameter_id' => 6,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            130 => 
            array (
                'id' => 131,
                'parameter_id' => 9,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            131 => 
            array (
                'id' => 132,
                'parameter_id' => 12,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            132 => 
            array (
                'id' => 133,
                'parameter_id' => 16,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            133 => 
            array (
                'id' => 134,
                'parameter_id' => 18,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            134 => 
            array (
                'id' => 135,
                'parameter_id' => 23,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            135 => 
            array (
                'id' => 136,
                'parameter_id' => 26,
                'rule_id' => 17,
                'created_at' => '2019-10-29 07:36:16',
                'updated_at' => '2019-10-29 07:36:16',
            ),
            136 => 
            array (
                'id' => 137,
                'parameter_id' => 3,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            137 => 
            array (
                'id' => 138,
                'parameter_id' => 6,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            138 => 
            array (
                'id' => 139,
                'parameter_id' => 9,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            139 => 
            array (
                'id' => 140,
                'parameter_id' => 12,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            140 => 
            array (
                'id' => 141,
                'parameter_id' => 16,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            141 => 
            array (
                'id' => 142,
                'parameter_id' => 19,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            142 => 
            array (
                'id' => 143,
                'parameter_id' => 23,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            143 => 
            array (
                'id' => 144,
                'parameter_id' => 26,
                'rule_id' => 18,
                'created_at' => '2019-10-29 07:37:21',
                'updated_at' => '2019-10-29 07:37:21',
            ),
            144 => 
            array (
                'id' => 145,
                'parameter_id' => 3,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            145 => 
            array (
                'id' => 146,
                'parameter_id' => 6,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            146 => 
            array (
                'id' => 147,
                'parameter_id' => 9,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            147 => 
            array (
                'id' => 148,
                'parameter_id' => 13,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            148 => 
            array (
                'id' => 149,
                'parameter_id' => 16,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            149 => 
            array (
                'id' => 150,
                'parameter_id' => 18,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            150 => 
            array (
                'id' => 151,
                'parameter_id' => 23,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            151 => 
            array (
                'id' => 152,
                'parameter_id' => 26,
                'rule_id' => 19,
                'created_at' => '2019-10-29 07:38:14',
                'updated_at' => '2019-10-29 07:38:14',
            ),
            152 => 
            array (
                'id' => 153,
                'parameter_id' => 3,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            153 => 
            array (
                'id' => 154,
                'parameter_id' => 6,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            154 => 
            array (
                'id' => 155,
                'parameter_id' => 9,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            155 => 
            array (
                'id' => 156,
                'parameter_id' => 13,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            156 => 
            array (
                'id' => 157,
                'parameter_id' => 16,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            157 => 
            array (
                'id' => 158,
                'parameter_id' => 19,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            158 => 
            array (
                'id' => 159,
                'parameter_id' => 23,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
            159 => 
            array (
                'id' => 160,
                'parameter_id' => 26,
                'rule_id' => 20,
                'created_at' => '2019-10-29 07:38:55',
                'updated_at' => '2019-10-29 07:38:55',
            ),
        ));
        
        
    }
}