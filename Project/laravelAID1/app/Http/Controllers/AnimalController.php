<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use App\Animal;
use App\Repositories\AnimalRepositoryInterface;
class AnimalController extends Controller
{
    protected $AnimalRepository;
    function __construct(AnimalRepositoryInterface $AnimalRepository){
        $this->AnimalRepository = $AnimalRepository;
    }

    function index(){
        $animals = $this->AnimalRepository->getAllAnimal();
        $data = array(
            'animals'=>$animals
        );
        return view('animal',$data);
    }

    function addAnimal(){
      if(Request::isMethod('get')){
        return view('add_animal');
      }else if(Request::isMethod('post')){

            $animalName = Input::get('ani_name');
            $animalType= Input::get('ani_type');
            $result = $this->AnimalRepository->addAnimal($animalName,$animalType);
            if($result){
                return redirect('/home');
            }else{
                echo "Failed to add animal";
            }

      }
    }


}
