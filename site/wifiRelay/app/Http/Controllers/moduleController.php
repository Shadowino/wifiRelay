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
    $id = module::insertGetId([
        'name' => $request->input('name'),
        'mode' => $request->input('mode')
    ]);
    if ($request->has('note')) return $this->show($id);
    return $id; // id добавленного модуля
  }

  // GET /module/{id}
  public function show($id){
    return module::where('id', $id)->get()->all();
  }

  // put /module/{id}
  public function update(Request $request, $id){
    module::where('id', $id)->update([
        'name' => $request->input('name'),
        'mode' => $request->input('mode')
    ]);
    if ($request->has('note')) return $this->show($id);
    return $id; // id обновленного модуля  }

  // DELETE /module/{id}
  public function destroy($id){
    return module::where('id', $id)->delete();
  }
  // функции с web interfaces

  // /module/create
  // api/module/create
  public function create()
  {
    return view('create-module');
    // return view(); // форма для создания нового модуля (делает ваня)
  }

  // /module/{}/edit
  // api/module/{}/edit
  public function edit($id)
  {
    return view('edit-module');
    // return view() //страница редактор модуля  (делает ваня)
  }
}
