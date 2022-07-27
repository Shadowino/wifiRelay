<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatSeeder extends Seeder
{

    public function run()
    {
      // date msg mark rl1 rl2 temp light sens
      $m1 = 0;
      $m2 = 0;
      $m3 = 0;
      $m4 = 0;
      $module = 0;
      $rmsg = 0;
      for ($i=0; $i < 150; $i++) {
        $module = rand(1,4);
        if($module == 1){
          $m1++; $rmsg = $m1;
        }elseif ($module == 2) {
          $m2++; $rmsg = $m2;
        }elseif ($module == 3) {
          $m3++; $rmsg = $m3;
        }elseif ($module == 4) {
          $m4++; $rmsg = $m4;
        }
        DB::table('stats')->insert([
            'date' => date('Y-m-d h:i:s'),
            'msg' => $rmsg,
            'mark' => $module,
            'relay1' => rand(0,1),
            'relay2' => rand(0,1),
            'temp' => rand(200, 300) / 10,
            'light' => rand(0, 1024),
            'sens' => rand(0, 1024)
        ]);

      }
    }
}
