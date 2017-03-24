<?php
namespace App\Repositories;
use App\Animal;
  class AnimalRepository implements AnimalRepositoryInterface{

    function addAnimal($animal_name,$animal_type){ // รับเป็น array
        $data = array(

            'animal_name'=>$animal_name,
            'animal_type'=>$animal_type
            //'student_password'=>Hash::make(str_random(32))
        );
        try{
            $result = Animal::create($data);
            return true;
        }catch(Exception $e){
            return false;
        }
    }
  }
