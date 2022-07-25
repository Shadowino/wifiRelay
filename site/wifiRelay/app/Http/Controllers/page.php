<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class page extends Controller
{

    public function main(){
      return view('main');
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
