<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursesController extends Controller
{
    public function create_courses(){
        return view('cources');
    }
}
