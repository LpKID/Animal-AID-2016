<?php



use Request;
use App\Http\Controllers\Controller;
use App\Animal;
use App\Http\Requests;
namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    //
    public function index()
{
    $animals = Animal::get();
                    
    return view('animals.index',compact('animals'));
}




public function show($animal_id){
    $animal = Animal::find($animal_id);
    if(empty($animal))
    abort(404);
    return view('animals.show',compact('animal'));
}



public function  create()
{
    return view('create');
}


public function store()
{
    $input = Request::all();
    Animal::create($input);
    return redirect('animals');
}
}
