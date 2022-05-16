<?php

namespace App\Http\Controllers;

use App\Treno;
use Illuminate\Http\Request;

class TrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $trenis = Treno::all();
        return view('trains.index', ['trenis'=> $trenis]);
    }
  
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

  
}
