<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasestudyController extends Controller
{
   public function index(){
    return view('frontend.casestudy.index');
   }

}
