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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/formtogetpostmethod",function(){
	return view("task2.form");
});

Route::post("/getItems",function(Request $request){
	$data=[
	"name"=> $request->post()["name"],
	"lastname"=> $request->post()["lastname"],
	"address"=> $request->post()["address"],
	"biography"=> $request->post()["biography"],
	"date"=> $request->post()["date"]
];
	return view("task2.table",["newdata"=>$data]);

})->name("posttask");