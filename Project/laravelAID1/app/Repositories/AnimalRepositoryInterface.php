<?php
namespace App\Repositories;
interface AnimalRepositoryInterface{

function addAnimal($animal_name,$animal_type,$animal_picture,$animal_color,$animal_gender,$animal_age,$symptomCase,$statusDonation,$doType_id);
function getAllAnimal();

}
