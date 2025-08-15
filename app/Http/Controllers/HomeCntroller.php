<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeCntroller extends Controller
{
     public function index(){
        // Auth::logout();
         return view('index');
     }

     public function readMore(){
         return view('readMore');
     }
}
