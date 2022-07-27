<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\module;

class moduleController extends Controller
{

  public function index()
  {
    return module::limit(10)->get()->all();;
  }

  // get

  // api функция для добавления модуля в базу
  public function store(Request $request){
    return '// WARNING: module not added!'; // нЕчего возвращать..
  }

  // GET /module/{id}
  public function show($id){
    return module::where('id', $id)->get()->all();
  }

  // put /module/{id}
  public function update(Request $request, $id)
  {
    return '// WARNING: module not updated!'; // нЕчего возвращать..
  }

  // DELETE /module/{id}
  public function destroy($id)
  {
    return '// WARNING: module not deleted!'; // нЕчего возвращать..
  }
  // функции с web interfaces

  // /module/create
  // api/module/create
  public function create()
  {
    echo "module/create - page <br> ";
    // return view(); // форма для создания нового модуля (делает ваня)
  }

  // /module/{}/edit
  // api/module/{}/edit
  public function edit($id)
  {
    echo"module/$id/edit - page <br>";
    // return view() //страница редактор модуля  (делает ваня)
  }
}
