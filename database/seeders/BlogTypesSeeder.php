<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog\BlogType;
use DB;

class BlogTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BlogType::truncate();
        DB::table('blog_types') -> insert ([
            ['id' => 1 , 'type' => 'Тренировки и программы'],
            ['id' => 2 , 'type' => 'Питание и диета'],
            ['id' => 3 , 'type' => 'Мотивация и психология'],
            ['id' => 4 , 'type' => 'Здоровье и восстановление'],
            ['id' => 5 , 'type' => 'Новости и тренды'],
            ['id' => 6 , 'type' => 'Советы для начинающих'],
            ['id' => 7 , 'type' => 'Советы от профессионалов'],
            ['id' => 8 , 'type' => 'Тренировки и программы']
        ]);
    }
}
