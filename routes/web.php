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
use App\Post;
use App\Tag;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', function(){
//     $staff = Staff::findOrFail(1);

//     $staff->photos()->create(['path'=>'example.jpg']);
// });

// Route::get('/read', function(){
//     $staff = Staff::findOrFail(1);

//     foreach($staff->photos as $photo){
//         echo $photo->path;
//     }
// });

// Route::get('/update', function(){
//     $staff = Staff::findOrFail(1);

//     $photo = $staff->photos()->whereId(1)->first();
//     $photo->path = "updated.jpg";
//     $photo->save();
// });

// Route::get('/delete', function(){
//     $staff = Staff::findOrFail(1);
//     $staff->photos()->whereId(1)->delete();
// });


// Route::get('/createmor', function(){

//     $post = Post::create(['name'=>'First post']);

//     $tag1 = Tag::findOrFail(1);

//     $post->tags()->save($tag1);
    

//     $video = Video::create(['name'=>'ddd.mov']);

//     $tag2 = Tag::findOrFail(2);

//     $video->tags()->save($tag2);
    



// });

// Route::get('/readmor', function(){
//     $post = Post::findOrFail(8);

//     foreach($post->tags as $tag){
//         echo $tag->name;
//     }
// });

// Route::get('/updatemor', function(){


    // $post = Post::findOrFail(8);
    // foreach($post->tags as $tag){
    //     $tag->whereName('Php')->update(['name'=>'PHP']);
    // }

//     $post = Post::findOrFail(3);
//     $tag = Tag::findOrFail(3);

//     // $post->tags()->save( $tag);

//     $post->tags()->attach( $tag);


// });

// Route::get('/deletemor', function(){
//     $post = Post::findOrFail(1);

//     foreach($post->tags as $tag){
//             $tag->whereId(1)->delete();
//     }
// });


Route::get('/create', function(){
    $staff = Staff::findOrFail(1);
    $staff->photos()->create(['path'=>'ext.jpg']);
});

Route::get('/read', function(){
    $staff = Staff::findOrFail(1);
    foreach($staff->photos as $photo){
        echo $photo->path . "<br>";
    }
});

Route::get('/update', function(){
    $staff = Staff::findOrFail(1);
    $photo = $staff->photos()->whereId(2)->first();
    $photo->path = "updated.jpg";
    $photo->save();

});

Route::get('/createmore', function(){
    $post = Post::create(['name'=>'first post']);

    $tag = Tag::find(2);

    $post->tags()->save($tag);

    $vid = Video::create(['name'=>'vid.mov']);

    $tag2 = Tag::find(3);

    $vid->tags()->save($tag2);


});

Route::get('/readmore', function(){
    $post = Post::findOrFail(3);
    foreach($post->tags as $tag){
        echo $tag;
    }
});

