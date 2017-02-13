<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //
   public function index()
    {
        return view('index');
    }



      public function askinput()
    {
        return view('askinput');
    }



      public function create()
    {
        return view('create');
    }
}
