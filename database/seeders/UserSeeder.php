<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Niel Iroc',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'user_type'=> 'admin'
            ],[
                'name' => 'Nino Iroc',
                'email' => 'student@gmail.com',
                'password' => Hash::make('12345678'),
                'user_type'=> 'student'
            ],[
                'name' => 'Elvira Iroc',
                'email' => 'accountant@gmail.com',
                'password' => Hash::make('12345678'),
                'user_type'=> 'accountant'
            ],[
                'name' => 'Nelson Iroc',
                'email' => 'secretary@gmail.com',
                'password' => Hash::make('12345678'),
                'user_type'=> 'secretary'
            ],[
                'name' => 'Yvon Iroc',
                'email' => 'cashier@gmail.com',
                'password' => Hash::make('12345678'),
                'user_type'=> 'cashier'
            ]

        ]);
    }
}
