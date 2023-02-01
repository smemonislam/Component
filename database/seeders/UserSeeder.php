<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach( range(1, 10) as $value ){
            User::create([
                'admin_id'  => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'group_id'   => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'name'      => $faker->name(15),
                'email'     => $faker->unique()->safeEmail(),
                'phone'     => $faker->randomElement(['01911896252', '01946609792', '01997358072', '01913026975', '01943510576', '01955810564']),
                'address'   => $faker->address()
            ]);
        }
    }
}
