<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function() {
//     return view('post');
// });

// Route::get('/hyeee', function() {
//     return view('about');
// });

// Route::get('/hyeeeeeeahahahah', function() {
//     return view('about');
// })->name('hye');



// Route::get('/hello/{id?}', function(string $id = null){
//     if($id){
//         return"<h1>PostID : " .$id."</h1>";
//     }else{
//         return"<h1>No ID found</h1>";
//     }
// });

// Route::get('/hello/{id?}/comment/{commentid?}', function(string $id = null, string $comment = null){
//     if($id){
//         return"<h1>PostID : " .$id."</h1><h2>".$comment."</h2>";
//     }else{
//         return"<h1>No ID found</h1>";
//     }
// });

// Route::get('/hello/{id}', function(string $id = null, string $comment = null){
//     if($id){
//         return"<h1>PostID : " .$id."</h1><h2>".$comment."</h2>";
//     }else{
//         return"<h1>No ID found</h1>";
//     }
// })->whereNumber('id');


// redirect

// Route::get('/nohello', function() {
//     return view('post');
// });

// Route::redirect('/hello','/nohello',301);    //301 for permanent change  



/*routes group*/


/*
Route::get('/',function(){
    return view('welcome');
})->name('home');

Route::prefix('page')->group(function(){
    Route::get('/about',function(){
        return "<h1>About Page</h1>";
    });
    
    
    
    Route::get('/gallery',function(){
        return "<h1>Gallery Page</h1>";
    });
    
    
    Route::get('/post/firstpost',function(){
        return "<h1>First Post Page</h1>";
    });
});

//fallback

Route::fallback(function(){
    return "<h1>Page Not Found</h1>";
});

*/


Route::get('/register',[RegistrationController::class, 'index']);

Route::post('/register',[RegistrationController::class, 'register']);