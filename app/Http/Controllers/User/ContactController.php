<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
    
         $data['setting'] = Setting::first();

         return view('user.contact.index')->with($data);
    }
}
