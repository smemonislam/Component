<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Admin::create([
            'name'      => "Admin",
            'email'     => "admin@gmail.com",
            'email_verified_at' => now(),
            'password'  => Hash::make('123456'),
            'address'   => "Khulna Bangladesh",
            'phone'     => '01946609792'
        ]);
    }
}
