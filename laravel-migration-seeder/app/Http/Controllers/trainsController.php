<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainsController extends Controller
{
    public function index(){
        return view('trains.index');
    }
}
