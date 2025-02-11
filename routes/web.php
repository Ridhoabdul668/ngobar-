<?php

use Illuminate\Support\Facades\Route;

//ini adalah controler ngobar
use App\Http\Controllers\NgobarController;


Route::get('/', function () {
    return view('welcome');
});




//ini contoh route memakai method get


//Route::get('',function (){
 //   return view ('ngobars.index');
//  });




