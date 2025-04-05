<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
          
      ['name' => '春'],
      ['name' => '夏'],
      ['name' => '秋'],
      ['name' => '冬'],
        ];
        foreach($params as $p){DB::table('seasons')->insert($p);}
    }
}
