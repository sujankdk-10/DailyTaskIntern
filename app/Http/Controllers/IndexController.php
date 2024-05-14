<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class IndexController extends Controller
{
    public function index(){
      return Member::with('getGroup')->get();
    }
    
}
