<?php

namespace App\Http\Controllers;

use App\Models\stat;
use Illuminate\Http\Request;

class StatController extends Controller
{

  // get log
  public function index()
  {
    $res = stat::limit(10)->get()->all();
    // dump($res);
    // foreach ($res as $value) {
    //   echo $value->id;
    //   echo "<br>";
    //   echo $value->date;
    //   echo "<br>";
    //   echo $value->msg;
    //   echo "<br>";
    //   echo $value->mark;
    //   echo "<br>";
    //   echo $value->relay1;
    //   echo "<br>";
    //   echo $value->relay1;
    //   echo "<br>";
    //   echo $value->temp;
    //   echo "<br>";
    //   echo $value->light;
    //   echo "<br>";
    //   echo $value->sens;
    //   echo '<br> <br>';
    // }
    return view('deb', ['res' => $res, 'cnt' => 10]);
    // foreach ($res as $key) {

    // }
    // return $res;
  }

  // post log
  public function store(Request $request)
  {
    stat::insert([
      'date' => date('Y-m-d h:i:s'),
      'msg' => $request->input('msg'),
      'mark' => $request->input('mark'),
      'relay1' =>$request->input('relay1'),
      'relay2' => $request->input('relay2'),
      'temp' => $request->input('temp'),
      'light' => $request->input('light'),
      'sens' => $request->input('sens')
    ]);
  }

  //get log/{log}
  public function show($cnt)
  {
    $cnt = ($cnt == -1) ? 500 : $cnt;
    $cnt = ($cnt < 0) ? 0 : (($cnt > 500) ? 500 : $cnt);
    $res = stat::limit($cnt)->get()->all();
    return view('deb', ['res' => $res, 'cnt' => $cnt]);

  }

  //put log/{log}
  public function update(Request $request, stat $stat)
  {
    //
  }

  // delete log/{log}
  public function destroy(stat $stat)
  {
    //
  }

  //removed for API

  // get log/{log}/edit
  public function edit(stat $stat){

  }

  // get log/create
  public function create()
  {
    // code...
  }
}
