<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function upload(Request $request){
        $fileName = time()."img.".$request->file('file')->getClientOriginalExtension();
        echo $request->file('file')->storeAs('uploads',$fileName);

    
   
}
}
