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

    function animal(){
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
            $animalPicture = Input::get('ani_picture');
            $animalColor= Input::get('ani_color');
            $animalGender= Input::get('ani_gender');
            $animalAge= Input::get('ani_age');
            $symptomCase= Input::get('symptomCase');
            $statusDonation= Input::get('statusDonation');
            $animalType= Input::get('ani_type');
            $doTypeId= Input::get('doType_id');
            $result = $this->AnimalRepository->addAnimal($animalName,$animalType,$animalPicture,$animalColor,$animalGender,$animalAge,$symptomCase,$statusDonation,$doTypeId);
            if($result){
                return redirect('/add');
            }else{
                echo "Failed to add animal";
            }

      }
    }


}
