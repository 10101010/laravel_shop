<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('additem','ItemsController@add');
Route::post('additem','ItemsController@save');
Route::post('get_parameters','ParametersController@get');
Route::post('save_parameters','ParametersController@save');

Route::get('show/{id}', function($id) {
    $items = App\Items::find($id); // получаем все, что касается товара (название, цена....)
    $parameters = App\Items::parameters($id);//получаем все параметры
    $images = explode(';',$parameters[0]->preview); //ссылки на картинки передаем отдельным массивом
    return view('show', ['items'=>$items, 'parameters'=>$parameters, 'images'=>$images]);
});

Route::get('edit/{id}','ItemsController@edit');
Route::post('edit/{id}','ItemsController@update');

Route::get('test','TestController@add');
Route::post('test','TestController@save');
Route::post('del_image','ItemsController@del_image');

Route::get('/','ItemsController@showall');
Route::get('/basket','BasketController@show');
Route::post('/checkout','BasketController@checkout');
Route::get('/orders','BasketController@orders');