<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameters;

class ParametersController extends Controller
{
    public function get()
{
    $parameters=Parameters::all();
    return view('parameters', ['parameters'=>$parameters]);
}

//
public function save(Request $request)
{
    $param=Parameters::create($request->all()); //записываем параметр и единицу измерения в базу
    return [$param->id, $param->title, $param->unit]; //возвращаем массив из id созданого параметра и название параметра
}

}
