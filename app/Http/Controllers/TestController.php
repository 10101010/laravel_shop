<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;

class TestController extends Controller
{
    public function add()
{
    $parameters=Images::all();
    return view('test');
}

//
public function save(Request $request)
{
    //S$param=Images::create($request->all());

    $root=$_SERVER['DOCUMENT_ROOT']."/images/";

     //записываем параметр и единицу измерения в базу
    $url_img=[];

    foreach($request->file('preview') as $file) //обрабатываем массив с файлами
    {
        if(empty($file)) continue;
        // если <input type="file"... есть, но туда ничего не загруженно, то пропускаем
        $f_name=$file->getClientOriginalName(); //получаем имя файла
        $url_img[]='/images/'.$f_name; //добавляем url картинки в массив
        $file->move($root,$f_name); //
    }
    $preview=implode(';',$url_img);
    //return [$param->id, $preview]; //возвращаем массив из id созданого параметра и название параметра
}

}
