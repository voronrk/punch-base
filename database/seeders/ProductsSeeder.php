<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ar = [
            'Коробки',
	        'Обечайки',
	        'Открытки',
	        'Папки',
	        'Пакеты',
	        'Футляры',
	        'Буклеты',
	        'Обложки',
	        'Конверты',
	        'Рубрикаторы',
	        'Бирки',
	        'Хангеры',
	        'Этикетки',
        ];
        foreach($ar as $item) {
            DB::table('products')->insert([
                'value' => $item,
            ]);
        };        
    }
}
