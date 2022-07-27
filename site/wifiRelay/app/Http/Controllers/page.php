<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stat;



class page extends Controller
{

  public function main(){
    $res = stat::limit(10)->get()->all();
    return view('main', ['res' => $res]);
    // return "main page";
  }

  public function module(Request $req){
    return view('module');
    // return "module page";
    // dd($req);
  }

  public function stat(Request $req){
    return view('stat');
    // return "stat page";
  }
}
