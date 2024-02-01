<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bikecontroller;




Route::get('/', function () {
    return view('header');
});
Route::get('/posts',function(){
 $data=App\Models\bike::all();   
    return view('post')->with('bike',$data);
});
Route::get('/register',function(){
    return view('bike');
});
    
Route::post('/savebike',[Bikecontroller::class,'store']);

Route::get('/updatedetails/{id}',[Bikecontroller::class,'getdata']);

Route::post('/updateview',[Bikecontroller::class,'updatedata']);

Route::get('/deletedetails/{id}',[Bikecontroller::class,'deletedata']);