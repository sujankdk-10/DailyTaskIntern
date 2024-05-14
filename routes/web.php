<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\IndexController;

use App\Models\Customer;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/data',[IndexController::class,'index']);

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
// Route::get('/customer/submit',[CustomerController::class,'register']);
Route::get('/customer',[CustomerController::class,'view']);

Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

Route::post('/customer/submit', [CustomerController::class, 'submit']);


Route::get('get-all-session',function(){
    $session = session()->all();
    p($session);
});

Route::get('set-session',function(Request $request){
    $request->session()->put('user_name','Sujan Khadka');
    $request->session()->put('user_id','191837');
    $request->session()->flash('status','Success');
    return redirect('get-all-session');
});

Route::get('destroy-session',function(){
    session()->forget(['user_name','user_id']);
   // session()->forget('user_id');
    return redirect('get-all-session');
});

Route::get('/customer/trash', [CustomerController::class, 'trash']);


Route::get('/customer/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');

Route::get('/customer/force-delete/{id}',[CustomerController::class,'forceDelete'])->name('customer.force-delete');


Route::get('/upload',function(){
   return view('upload'); 
});

Route::post('/upload', [ContactController::class,'upload']);


Route::get('/{lang?}', function ($lang = null) {
    App::setLocale($lang);
    return view('index');
});

 