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
            160 => 
            array (
                'id' => 161,
                'parameter_id' => 2,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            161 => 
            array (
                'id' => 162,
                'parameter_id' => 4,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            162 => 
            array (
                'id' => 163,
                'parameter_id' => 7,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            163 => 
            array (
                'id' => 164,
                'parameter_id' => 11,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            164 => 
            array (
                'id' => 165,
                'parameter_id' => 16,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            165 => 
            array (
                'id' => 166,
                'parameter_id' => 18,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            166 => 
            array (
                'id' => 167,
                'parameter_id' => 23,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            167 => 
            array (
                'id' => 168,
                'parameter_id' => 26,
                'rule_id' => 21,
                'created_at' => '2019-11-12 11:32:02',
                'updated_at' => '2019-11-12 11:32:02',
            ),
            168 => 
            array (
                'id' => 169,
                'parameter_id' => 2,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            169 => 
            array (
                'id' => 170,
                'parameter_id' => 4,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            170 => 
            array (
                'id' => 171,
                'parameter_id' => 7,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            171 => 
            array (
                'id' => 172,
                'parameter_id' => 13,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            172 => 
            array (
                'id' => 173,
                'parameter_id' => 16,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            173 => 
            array (
                'id' => 174,
                'parameter_id' => 19,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            174 => 
            array (
                'id' => 175,
                'parameter_id' => 23,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            175 => 
            array (
                'id' => 176,
                'parameter_id' => 26,
                'rule_id' => 22,
                'created_at' => '2019-11-12 11:32:44',
                'updated_at' => '2019-11-12 11:32:44',
            ),
            176 => 
            array (
                'id' => 177,
                'parameter_id' => 2,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            177 => 
            array (
                'id' => 178,
                'parameter_id' => 4,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            178 => 
            array (
                'id' => 179,
                'parameter_id' => 7,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            179 => 
            array (
                'id' => 180,
                'parameter_id' => 11,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            180 => 
            array (
                'id' => 181,
                'parameter_id' => 16,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            181 => 
            array (
                'id' => 182,
                'parameter_id' => 18,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            182 => 
            array (
                'id' => 183,
                'parameter_id' => 23,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            183 => 
            array (
                'id' => 184,
                'parameter_id' => 26,
                'rule_id' => 23,
                'created_at' => '2019-11-12 11:33:25',
                'updated_at' => '2019-11-12 11:33:25',
            ),
            184 => 
            array (
                'id' => 185,
                'parameter_id' => 2,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            185 => 
            array (
                'id' => 186,
                'parameter_id' => 4,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            186 => 
            array (
                'id' => 187,
                'parameter_id' => 7,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            187 => 
            array (
                'id' => 188,
                'parameter_id' => 13,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            188 => 
            array (
                'id' => 189,
                'parameter_id' => 16,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            189 => 
            array (
                'id' => 190,
                'parameter_id' => 19,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            190 => 
            array (
                'id' => 191,
                'parameter_id' => 23,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            191 => 
            array (
                'id' => 192,
                'parameter_id' => 26,
                'rule_id' => 24,
                'created_at' => '2019-11-12 11:34:11',
                'updated_at' => '2019-11-12 11:34:11',
            ),
            192 => 
            array (
                'id' => 193,
                'parameter_id' => 3,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:45',
                'updated_at' => '2019-11-12 11:35:45',
            ),
            193 => 
            array (
                'id' => 194,
                'parameter_id' => 4,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:45',
                'updated_at' => '2019-11-12 11:35:45',
            ),
            194 => 
            array (
                'id' => 195,
                'parameter_id' => 7,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:45',
                'updated_at' => '2019-11-12 11:35:45',
            ),
            195 => 
            array (
                'id' => 196,
                'parameter_id' => 11,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:45',
                'updated_at' => '2019-11-12 11:35:45',
            ),
            196 => 
            array (
                'id' => 197,
                'parameter_id' => 16,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:46',
                'updated_at' => '2019-11-12 11:35:46',
            ),
            197 => 
            array (
                'id' => 198,
                'parameter_id' => 18,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:46',
                'updated_at' => '2019-11-12 11:35:46',
            ),
            198 => 
            array (
                'id' => 199,
                'parameter_id' => 23,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:46',
                'updated_at' => '2019-11-12 11:35:46',
            ),
            199 => 
            array (
                'id' => 200,
                'parameter_id' => 26,
                'rule_id' => 25,
                'created_at' => '2019-11-12 11:35:46',
                'updated_at' => '2019-11-12 11:35:46',
            ),
            200 => 
            array (
                'id' => 201,
                'parameter_id' => 3,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            201 => 
            array (
                'id' => 202,
                'parameter_id' => 4,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            202 => 
            array (
                'id' => 203,
                'parameter_id' => 7,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            203 => 
            array (
                'id' => 204,
                'parameter_id' => 13,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            204 => 
            array (
                'id' => 205,
                'parameter_id' => 16,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            205 => 
            array (
                'id' => 206,
                'parameter_id' => 19,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            206 => 
            array (
                'id' => 207,
                'parameter_id' => 23,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            207 => 
            array (
                'id' => 208,
                'parameter_id' => 26,
                'rule_id' => 26,
                'created_at' => '2019-11-12 11:36:42',
                'updated_at' => '2019-11-12 11:36:42',
            ),
            208 => 
            array (
                'id' => 209,
                'parameter_id' => 3,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            209 => 
            array (
                'id' => 210,
                'parameter_id' => 4,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            210 => 
            array (
                'id' => 211,
                'parameter_id' => 7,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            211 => 
            array (
                'id' => 212,
                'parameter_id' => 11,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            212 => 
            array (
                'id' => 213,
                'parameter_id' => 16,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            213 => 
            array (
                'id' => 214,
                'parameter_id' => 18,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            214 => 
            array (
                'id' => 215,
                'parameter_id' => 23,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            215 => 
            array (
                'id' => 216,
                'parameter_id' => 26,
                'rule_id' => 27,
                'created_at' => '2019-11-12 11:37:24',
                'updated_at' => '2019-11-12 11:37:24',
            ),
            216 => 
            array (
                'id' => 217,
                'parameter_id' => 3,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            217 => 
            array (
                'id' => 218,
                'parameter_id' => 4,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            218 => 
            array (
                'id' => 219,
                'parameter_id' => 7,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            219 => 
            array (
                'id' => 220,
                'parameter_id' => 13,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            220 => 
            array (
                'id' => 221,
                'parameter_id' => 16,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            221 => 
            array (
                'id' => 222,
                'parameter_id' => 19,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            222 => 
            array (
                'id' => 223,
                'parameter_id' => 23,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            223 => 
            array (
                'id' => 224,
                'parameter_id' => 26,
                'rule_id' => 28,
                'created_at' => '2019-11-12 11:38:09',
                'updated_at' => '2019-11-12 11:38:09',
            ),
            224 => 
            array (
                'id' => 225,
                'parameter_id' => 3,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            225 => 
            array (
                'id' => 226,
                'parameter_id' => 5,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            226 => 
            array (
                'id' => 227,
                'parameter_id' => 9,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            227 => 
            array (
                'id' => 228,
                'parameter_id' => 12,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            228 => 
            array (
                'id' => 229,
                'parameter_id' => 14,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            229 => 
            array (
                'id' => 230,
                'parameter_id' => 21,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            230 => 
            array (
                'id' => 231,
                'parameter_id' => 25,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            231 => 
            array (
                'id' => 232,
                'parameter_id' => 26,
                'rule_id' => 29,
                'created_at' => '2019-11-12 11:38:53',
                'updated_at' => '2019-11-12 11:38:53',
            ),
            232 => 
            array (
                'id' => 233,
                'parameter_id' => 3,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            233 => 
            array (
                'id' => 234,
                'parameter_id' => 5,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            234 => 
            array (
                'id' => 235,
                'parameter_id' => 10,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            235 => 
            array (
                'id' => 236,
                'parameter_id' => 12,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            236 => 
            array (
                'id' => 237,
                'parameter_id' => 14,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            237 => 
            array (
                'id' => 238,
                'parameter_id' => 21,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            238 => 
            array (
                'id' => 239,
                'parameter_id' => 25,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            239 => 
            array (
                'id' => 240,
                'parameter_id' => 26,
                'rule_id' => 30,
                'created_at' => '2019-11-12 11:39:37',
                'updated_at' => '2019-11-12 11:39:37',
            ),
            240 => 
            array (
                'id' => 241,
                'parameter_id' => 3,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            241 => 
            array (
                'id' => 242,
                'parameter_id' => 4,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            242 => 
            array (
                'id' => 243,
                'parameter_id' => 10,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            243 => 
            array (
                'id' => 244,
                'parameter_id' => 11,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            244 => 
            array (
                'id' => 245,
                'parameter_id' => 16,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            245 => 
            array (
                'id' => 246,
                'parameter_id' => 20,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            246 => 
            array (
                'id' => 247,
                'parameter_id' => 24,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            247 => 
            array (
                'id' => 248,
                'parameter_id' => 27,
                'rule_id' => 31,
                'created_at' => '2019-11-12 11:40:20',
                'updated_at' => '2019-11-12 11:40:20',
            ),
            248 => 
            array (
                'id' => 249,
                'parameter_id' => 3,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            249 => 
            array (
                'id' => 250,
                'parameter_id' => 4,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            250 => 
            array (
                'id' => 251,
                'parameter_id' => 10,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            251 => 
            array (
                'id' => 252,
                'parameter_id' => 11,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            252 => 
            array (
                'id' => 253,
                'parameter_id' => 16,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            253 => 
            array (
                'id' => 254,
                'parameter_id' => 20,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            254 => 
            array (
                'id' => 255,
                'parameter_id' => 24,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            255 => 
            array (
                'id' => 256,
                'parameter_id' => 28,
                'rule_id' => 32,
                'created_at' => '2019-11-12 11:40:56',
                'updated_at' => '2019-11-12 11:40:56',
            ),
            256 => 
            array (
                'id' => 257,
                'parameter_id' => 2,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            257 => 
            array (
                'id' => 258,
                'parameter_id' => 5,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            258 => 
            array (
                'id' => 259,
                'parameter_id' => 10,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            259 => 
            array (
                'id' => 260,
                'parameter_id' => 12,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            260 => 
            array (
                'id' => 261,
                'parameter_id' => 14,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            261 => 
            array (
                'id' => 262,
                'parameter_id' => 18,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            262 => 
            array (
                'id' => 263,
                'parameter_id' => 22,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            263 => 
            array (
                'id' => 264,
                'parameter_id' => 27,
                'rule_id' => 33,
                'created_at' => '2019-11-12 11:41:54',
                'updated_at' => '2019-11-12 11:41:54',
            ),
            264 => 
            array (
                'id' => 265,
                'parameter_id' => 2,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:32',
                'updated_at' => '2019-11-12 11:42:32',
            ),
            265 => 
            array (
                'id' => 266,
                'parameter_id' => 5,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:32',
                'updated_at' => '2019-11-12 11:42:32',
            ),
            266 => 
            array (
                'id' => 267,
                'parameter_id' => 10,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:33',
                'updated_at' => '2019-11-12 11:42:33',
            ),
            267 => 
            array (
                'id' => 268,
                'parameter_id' => 12,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:33',
                'updated_at' => '2019-11-12 11:42:33',
            ),
            268 => 
            array (
                'id' => 269,
                'parameter_id' => 14,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:33',
                'updated_at' => '2019-11-12 11:42:33',
            ),
            269 => 
            array (
                'id' => 270,
                'parameter_id' => 19,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:33',
                'updated_at' => '2019-11-12 11:42:33',
            ),
            270 => 
            array (
                'id' => 271,
                'parameter_id' => 22,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:33',
                'updated_at' => '2019-11-12 11:42:33',
            ),
            271 => 
            array (
                'id' => 272,
                'parameter_id' => 27,
                'rule_id' => 34,
                'created_at' => '2019-11-12 11:42:33',
                'updated_at' => '2019-11-12 11:42:33',
            ),
            272 => 
            array (
                'id' => 273,
                'parameter_id' => 2,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            273 => 
            array (
                'id' => 274,
                'parameter_id' => 5,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            274 => 
            array (
                'id' => 275,
                'parameter_id' => 10,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            275 => 
            array (
                'id' => 276,
                'parameter_id' => 12,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            276 => 
            array (
                'id' => 277,
                'parameter_id' => 17,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            277 => 
            array (
                'id' => 278,
                'parameter_id' => 18,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            278 => 
            array (
                'id' => 279,
                'parameter_id' => 22,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            279 => 
            array (
                'id' => 280,
                'parameter_id' => 27,
                'rule_id' => 35,
                'created_at' => '2019-11-12 11:43:23',
                'updated_at' => '2019-11-12 11:43:23',
            ),
            280 => 
            array (
                'id' => 281,
                'parameter_id' => 2,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            281 => 
            array (
                'id' => 282,
                'parameter_id' => 5,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            282 => 
            array (
                'id' => 283,
                'parameter_id' => 10,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            283 => 
            array (
                'id' => 284,
                'parameter_id' => 12,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            284 => 
            array (
                'id' => 285,
                'parameter_id' => 17,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            285 => 
            array (
                'id' => 286,
                'parameter_id' => 19,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            286 => 
            array (
                'id' => 287,
                'parameter_id' => 22,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            287 => 
            array (
                'id' => 288,
                'parameter_id' => 27,
                'rule_id' => 36,
                'created_at' => '2019-11-12 11:44:16',
                'updated_at' => '2019-11-12 11:44:16',
            ),
            288 => 
            array (
                'id' => 289,
                'parameter_id' => 2,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:06',
                'updated_at' => '2019-11-12 11:45:06',
            ),
            289 => 
            array (
                'id' => 290,
                'parameter_id' => 5,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:06',
                'updated_at' => '2019-11-12 11:45:06',
            ),
            290 => 
            array (
                'id' => 291,
                'parameter_id' => 10,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:06',
                'updated_at' => '2019-11-12 11:45:06',
            ),
            291 => 
            array (
                'id' => 292,
                'parameter_id' => 13,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:07',
                'updated_at' => '2019-11-12 11:45:07',
            ),
            292 => 
            array (
                'id' => 293,
                'parameter_id' => 14,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:09',
                'updated_at' => '2019-11-12 11:45:09',
            ),
            293 => 
            array (
                'id' => 294,
                'parameter_id' => 18,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:10',
                'updated_at' => '2019-11-12 11:45:10',
            ),
            294 => 
            array (
                'id' => 295,
                'parameter_id' => 22,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:12',
                'updated_at' => '2019-11-12 11:45:12',
            ),
            295 => 
            array (
                'id' => 296,
                'parameter_id' => 27,
                'rule_id' => 37,
                'created_at' => '2019-11-12 11:45:12',
                'updated_at' => '2019-11-12 11:45:12',
            ),
            296 => 
            array (
                'id' => 297,
                'parameter_id' => 2,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            297 => 
            array (
                'id' => 298,
                'parameter_id' => 5,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            298 => 
            array (
                'id' => 299,
                'parameter_id' => 10,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            299 => 
            array (
                'id' => 300,
                'parameter_id' => 13,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            300 => 
            array (
                'id' => 301,
                'parameter_id' => 14,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            301 => 
            array (
                'id' => 302,
                'parameter_id' => 19,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            302 => 
            array (
                'id' => 303,
                'parameter_id' => 22,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            303 => 
            array (
                'id' => 304,
                'parameter_id' => 27,
                'rule_id' => 38,
                'created_at' => '2019-11-12 11:46:04',
                'updated_at' => '2019-11-12 11:46:04',
            ),
            304 => 
            array (
                'id' => 305,
                'parameter_id' => 2,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:43',
                'updated_at' => '2019-11-12 11:46:43',
            ),
            305 => 
            array (
                'id' => 306,
                'parameter_id' => 5,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:43',
                'updated_at' => '2019-11-12 11:46:43',
            ),
            306 => 
            array (
                'id' => 307,
                'parameter_id' => 10,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:43',
                'updated_at' => '2019-11-12 11:46:43',
            ),
            307 => 
            array (
                'id' => 308,
                'parameter_id' => 13,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:43',
                'updated_at' => '2019-11-12 11:46:43',
            ),
            308 => 
            array (
                'id' => 309,
                'parameter_id' => 17,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:43',
                'updated_at' => '2019-11-12 11:46:43',
            ),
            309 => 
            array (
                'id' => 310,
                'parameter_id' => 18,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:44',
                'updated_at' => '2019-11-12 11:46:44',
            ),
            310 => 
            array (
                'id' => 311,
                'parameter_id' => 22,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:44',
                'updated_at' => '2019-11-12 11:46:44',
            ),
            311 => 
            array (
                'id' => 312,
                'parameter_id' => 27,
                'rule_id' => 39,
                'created_at' => '2019-11-12 11:46:44',
                'updated_at' => '2019-11-12 11:46:44',
            ),
            312 => 
            array (
                'id' => 313,
                'parameter_id' => 2,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            313 => 
            array (
                'id' => 314,
                'parameter_id' => 5,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            314 => 
            array (
                'id' => 315,
                'parameter_id' => 10,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            315 => 
            array (
                'id' => 316,
                'parameter_id' => 13,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            316 => 
            array (
                'id' => 317,
                'parameter_id' => 17,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            317 => 
            array (
                'id' => 318,
                'parameter_id' => 19,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            318 => 
            array (
                'id' => 319,
                'parameter_id' => 22,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
            319 => 
            array (
                'id' => 320,
                'parameter_id' => 27,
                'rule_id' => 40,
                'created_at' => '2019-11-12 11:47:25',
                'updated_at' => '2019-11-12 11:47:25',
            ),
        ));
        
        
    }
}