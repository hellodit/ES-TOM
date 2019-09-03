<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;

class UserParentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        $this->path = storage_path('app/public/user_photo/');
        $this->dimensions = ['300', '60'];


        if (!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 0777, true);
        }


        foreach ($this->dimensions as $row) {
            if (!File::isDirectory($this->path.'/'.$row)) {
                File::makeDirectory($this->path.'/'.$row);
            }
        }

        for ($i=0; $i < 25 ; $i++) {

            $image300 = $faker->image('public/storage/user_photo/300/',300,300, null, false);
            $image60 = $faker->image('public/storage/user_photo/60/',60,60, null, false);


            User::create([
                'name'       => $faker->name,
                'username'   => $faker->userName,
                'email'      => $faker->companyEmail,
                'password'   => bcrypt('parent'),
                'avatar'     => $image60,
                'type'       => 'parent'
            ]);
        }
    }
}
