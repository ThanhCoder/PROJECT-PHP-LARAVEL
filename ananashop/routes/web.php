<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//use App\Http\Controllers;

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

/*
Route::get('foo/{id}',function($id){// tham số 
    echo "Hello World. Your id is $id ";   
});*/


Route::get('foo/{id?}',function($id=100){// tham số 
    echo "Hello World. Your id is $id ";   
    $root = Router::current();
    echo "<br>Router :".$root;
    // route($url);
   // echo "<br>Router :".Router::current();
//    echo "<br>Router :" .Router::currentRouterName();
});
//->name('Foo');

Route::get('bar/{module?}/{update?}',function($module =100,$action='update'){ // tham số tùy chọn
    echo "Hello World. Your module is $module . Update is $action ";

    //return redirect()->router("Foo");
});//->name("bar");


// Nhóm đối tượng -> khi chạy gõ http://localhost:8000/Student/new (để chạy new) tương tự vs các cái còn lại
Route::group(['prefix'=>'Student'],function(){
    Route::get("index",function(){
        echo "Student,index";
    });
    Route::get("new",function(){
        echo "Student,index1";
    });
    Route::get("edit",function(){

    });

    Route::post("update",function(){

    });
});

Route::get('user/{id}', 'App\Http\Controllers\UserController@show');//->middleware('auth');

Route::resource('photo','App\Http\Controllers\PhotoController');

Route::resource('qlsv','App\Http\Controllers\qlsv');