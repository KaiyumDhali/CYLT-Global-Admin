<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlidersModel;
class HomeController extends Controller
{
   public function index(){
    
    $sliders=SlidersModel::first();
    // dd($sliders);
    return view('frontend.index',compact('sliders'));
   }
}
