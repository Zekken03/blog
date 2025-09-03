<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Pepe Doe',
            'email' => 'admin@example.com',
            'password' => hash::make('123'),
            'nickname' => 'pepito',
            'img' => 'default.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        for($i=0;$i<50;$i++){
        DB::table('users')->insert([
            'name' => 'Admin'.$i,
            'email' => 'admin'.$i.'@example.com',
            'password' => hash::make('234'),
            'nickname' => 'admin'.$i,
            'img' => 'default.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        }
    }
}
