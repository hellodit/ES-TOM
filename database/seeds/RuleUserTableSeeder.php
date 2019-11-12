<?php

use Illuminate\Database\Seeder;

class RuleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rule_user')->delete();
        
        \DB::table('rule_user')->insert(array (
            0 => 
            array (
                'id' => 6,
                'childname' => 'Senja Sembilu Berlalu',
                'gender' => 'L',
                'birthday' => '2019-09-03',
                'user_id' => '410c4490-04f7-11ea-b759-e3a22b28919a',
                'rule_id' => 1,
                'status' => 'success',
                'created_at' => '2019-11-12 11:52:03',
                'updated_at' => '2019-11-12 11:52:03',
            ),
            1 => 
            array (
                'id' => 7,
                'childname' => 'Mentari Pagi Bersinar',
                'gender' => 'L',
                'birthday' => '2018-05-14',
                'user_id' => '410c4490-04f7-11ea-b759-e3a22b28919a',
                'rule_id' => NULL,
                'status' => 'failed',
                'created_at' => '2019-11-12 11:53:18',
                'updated_at' => '2019-11-12 11:53:18',
            ),
            2 => 
            array (
                'id' => 8,
                'childname' => 'Senja Saat Itu',
                'gender' => 'L',
                'birthday' => '2018-08-26',
                'user_id' => '410c4490-04f7-11ea-b759-e3a22b28919a',
                'rule_id' => 5,
                'status' => 'success',
                'created_at' => '2019-11-12 11:54:07',
                'updated_at' => '2019-11-12 11:54:07',
            ),
            3 => 
            array (
                'id' => 9,
                'childname' => 'Asmeralda Angreini',
                'gender' => 'L',
                'birthday' => '2019-11-12',
                'user_id' => '410c4490-04f7-11ea-b759-e3a22b28919a',
                'rule_id' => 21,
                'status' => 'success',
                'created_at' => '2019-11-12 11:55:54',
                'updated_at' => '2019-11-12 11:55:54',
            ),
        ));
        
        
    }
}