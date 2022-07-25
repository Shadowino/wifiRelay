<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // date msg mark rl1 rl2 temp light sens
      for ($i=0; $i < 50; $i++) {
        DB::table('stats')->insert([
            'date' => date('Y-m-d h:i:s'),
            'msg' => $i,
            'mark' => 0,
            'relay1' => rand(0,1),
            'relay2' => rand(0,1),
            'temp' => rand(200, 300) / 10,
            'light' => rand(0, 1024),
            'sens' => rand(0, 1024)
        ]);
      }
    }
}
