<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function frontendcontactindex(){
    return view('frontend.contact.index');
   }
}
