<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navi extends Controller
{
    public function index(){
    	return view('index');
    }
}
