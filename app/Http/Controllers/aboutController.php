<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function view_about(){
        return view('aboutus');
    }
}
