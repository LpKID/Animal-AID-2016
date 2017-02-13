<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Http\Requests;
class AdminsController extends Controller
{
    //
    public function index()
{
    $admins = Admin::get();
                    
    return view('admins.index',compact('admins'));
}




public function show($admin_id){
    $admin = Admin::find($admin_id);
    if(empty($admin))
    abort(404);
    return view('admins.show',compact('admin'));
}



public function  create()
{
    return view('admins.create');
}


public function store()
{
    $input = Request::all();
    Admin::create($input);
    return redirect('admins');
}
}


