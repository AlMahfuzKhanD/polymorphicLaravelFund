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
use App\Staff;
use App\Photo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function(){
    $staff = Staff::findOrFail(1);

    $staff->photos()->create(['path'=>'example.jpg']);
});

Route::get('/read', function(){
    $staff = Staff::findOrFail(1);

    foreach($staff->photos as $photo){
        echo $photo->path;
    }
});

Route::get('/update', function(){
    $staff = Staff::findOrFail(1);

    $photo = $staff->photos()->whereId(1)->first();
    $photo->path = "updated.jpg";
    $photo->save();
});

Route::get('/delete', function(){
    $staff = Staff::findOrFail(1);
    $staff->photos()->whereId(1)->delete();
});


