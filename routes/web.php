<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\CustomerController;

use App\Models\Customer;
Route::get('/', function () {
    return view('index');
});

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


// Route::get('/customer',function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/view',[CustomerController::class,'register']);
Route::get('/customer',[CustomerController::class,'view']);

Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');