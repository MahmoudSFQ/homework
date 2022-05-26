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

Route::get('soo',function(){
   return view('admin.welcomeadmin',['name'=>'Mahmoud']);
});


Route::prefix('number')->group(function(){
   Route::get('one',function(){
      return "number one";
   });
   Route::get('tow',function(){
      return "number tow";
   });
   Route::get('tree',function(){
      return "number tree";
   });
});


Route::get('num/{num}',function($num){
   return "number id is :".$num ;
});


Route::redirect("Loginfacebook","https://www.facebook.com/profile.php?id=100030371855718");


Route::get('login', 'App\Http\Controllers\Controller@login');


Route::get('one',function(){
   return 'Mahmoud suliman Faqawi';
});


Route::get('/', function () {
   return view('welcome');
});
