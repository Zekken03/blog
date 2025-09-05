<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('posts')->insert([
                'title' => 'Como cuidar las suculentas',
                'description' => 'Guía completa para el cuidado de suculentas',
                'img' => 'default.jpg', 
                'content' => 'Las suculentas son plantas que almacenan agua en sus hojas, tallos o raíces. Para cuidarlas adecuadamente, sigue estos consejos:',
                'likes' => 0,
                'slug' => 'como-cuidar-las-suculentas',
                'user_id' => 1,
                'category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'),
            ]);

            DB::table('posts')->insert([
                'title' => '10 plantas de interior fáciles de cuidar',
                'description' => 'Descubre las mejores plantas de interior para principiantes',
                'img' => 'default.jpg', 
                'content' => 'Si eres nuevo en el mundo de las plantas de interior, estas 10 opciones son perfectas para ti. Son fáciles de cuidar y requieren poco mantenimiento.',
                'likes' => 0,
                'slug' => '10-plantas-de-interior-faciles-de-cuidar',
                'user_id' => 1,
                'category_id' => 1, 
                'created_at' => date('Y-m-d H:i:s'),
            ]);

        }

    }   
// }
