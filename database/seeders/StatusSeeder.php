<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->truncate();
        DB::table('statuses')->insert([
            ['name' =>'Уволить', 'rank'=>0, 'is_active' => true],
            ['name' =>'Оформить', 'rank'=>0, 'is_active' => true],
            ['name' =>'В штате', 'rank'=>0, 'is_active' => true],
            ['name' =>'Оформление', 'rank'=>0, 'is_active' => true],
            ['name' =>'Уволен', 'rank'=>0, 'is_active' => true],
            ['name' =>'Черновик', 'rank'=>0, 'is_active' => false],
        ]);
    }
}
