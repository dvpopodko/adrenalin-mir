<?php

namespace Database\Seeders;

use App\Models\SprUserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SprUsersTypesSeeder extends Seeder
{

    public function run()
    {   SprUserType::truncate();
        DB::table('spr_users_types')->insert([
            ['id'=> 1, 'type' => 'DEVELOPER', 'description' => 'Разработчик'],
            ['id'=> 2, 'type' => 'ADMIN', 'description' => 'Администратор (верификация постов, пользователей)'],
            ['id'=> 3, 'type' => 'COACH', 'description' => 'Тренер'],
            ['id'=> 4, 'type' => 'SIMPLE_USER', 'description' => 'Пользователь']
        ]);
    }
}
