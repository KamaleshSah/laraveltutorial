<?php

use Illuminate\Support\Facades\Route;

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
   // return "KAMLESHUTUBE";
});
Route::get('/contact', function () {
    return('This is contact page');
   // return "KAMLESHUTUBE";
});
Route::get('/about', function () {
    return('This is about page');
   // return "KAMLESHUTUBE";
});

Route::get('/post/{id}/{name}',function($id,$name){
       return "This is post number ".$id. " ".$name;
});

Route::get('admin/posts/example',array('as'=>'admin.home',function(){

    $url=route('admin.home');

    return "This is admin url ".$url;

    //  php artisan route:list


}));


//Route::get('crud/{id}', '\App\Http\Controllers\CrudController@index' );

Route::resource('crudapps','\App\Http\Controllers\CrudController');


Route::get('/contactpro','\App\Http\Controllers\CrudController@mycontact');


//Route::get('/contactpro','\App\Http\Controllers\CrudController@mycontact');
