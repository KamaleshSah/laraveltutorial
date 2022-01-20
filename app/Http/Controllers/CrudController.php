<?php
//  php artisan make:controller --resource CrudController

/*

On the lecture called called "Routing Controllers" I show you how to route your requests using a controller. Laravel recently updated this feature and the code changed.

You are going to see me, using a code similar to this below

Route::get('/', 'HomeController@index')
Every time you see that code, you need to change it to something similar to the ones below



  Route::get('/checking', '\App\Http\Controllers\HomeController@index');



As you can probably tell, now we have to include the whole path of that controller in the method.


OR


You can also use the one below, which I like best.



use App\Http\Controllers\HomeController; //


Route::get('/', [EdwinsController::class, 'index']);








*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($param)
    // {
    //     //
    //     return "CRUD OPERATION ".$param;
    // }

    public function index()
    {
        //
        return "CRUD OPERATION ";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "This is Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "Pass variable ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function mycontact(){
        return view('contact');
    }


}
