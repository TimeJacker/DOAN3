<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Tuấn Anh',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role'  =>1,
        ]);
        DB::table('users')->insert([
            'name' => 'Tuấn Anh',
            'email' => 'tuananh@gmail.com',
            'password' => Hash::make('12345678'),
            'role'  =>2,
        ]);
        DB::table('vs_customer')->insert([
            'name' => 'Tuấn Anh',
            'user_id' => 2,
            'email' => 'tuananh@gmail.com',
            'adress' => 'Địa chỉ',
            'number_phone' => '1234567890',
        ]);
    }
}
