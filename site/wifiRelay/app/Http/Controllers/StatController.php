<?php

namespace App\Http\Controllers;

use App\Models\stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
  // все функции начинаються с /api/..
  //  полный путь примерно 'метод функции' wifirelay/api/'url фугкции'
  //  например GET wifirelay/api/log


  // get log
  public function index(Request $req)
  {
    $res = stat::limit(10)->get()->all();
    if ($req->input('web') == null) {
      return $res;
    }
    return view('deb', ['res' => $res, 'cnt' => 10]);

  }

  // post log
  public function store(Request $request)
  {
    // post /log?msg=i&mark=0&relay1=0&relay2=0&temp=40.2&light=512&sens=1020
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
    return 1;
  }

  //get log/{log}
  public function show(Request $req, $cnt)
  {
    if ($req->input('web') == null) {
      return $res;
    }
    $cnt = ($cnt == -1) ? 500 : $cnt;
    $cnt = ($cnt < 0) ? 0 : (($cnt > 500) ? 500 : $cnt);
    $res = stat::limit($cnt)->get()->all();
    return view('deb', ['res' => $res, 'cnt' => $cnt]);

  }

  //put log/{log}
  public function update(Request $request, $stat){
    //
  }

  // delete log/{log}
  public function destroy($stat)
  {
    //
  }

  //removed for API

  // get log/{log}/edit
  public function edit($stat){

  }

  // get log/create
  public function create()
  {
    // code...
  }
}
