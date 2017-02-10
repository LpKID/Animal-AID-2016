<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AniController extends Controller
{
    //
    public function indexfunc()
{
    $title = 'Animal-AID';
    $subtitle = 'Welcome!!!';
    return view('index',['title'=>$title,'subtitle'=>$subtitle]);
}
}
