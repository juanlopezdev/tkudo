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
        DB::table('users')->insert([
            [
                'name'          => 'Juan Lopez',
                'email'         => 'juan.lopez@tektonlabs.com',
                'password'      => Hash::make('juanlopez'),
                'birthday_date' => '1990-10-28'
            ],
            [
                'name'          => Str::random(10),
                'email'         => Str::random(10) . '@tektonlabs.com',
                'password'      => Hash::make('password'),
                'birthday_date' => '1990-06-28'
            ],
            [
                'name'          => Str::random(10),
                'email'         => Str::random(10) . '@tektonlabs.com',
                'password'      => Hash::make('password'),
                'birthday_date' => '1990-06-30'
            ]
        ]);
    }
}
