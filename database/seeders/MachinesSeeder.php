<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ar = [
            'ПТ',
	        'ML',
	        'STS',
        ];
        foreach($ar as $item) {
            DB::table('machines')->insert([
                'value' => $item,
            ]);
        };
    }
}
