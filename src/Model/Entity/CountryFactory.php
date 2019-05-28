<?php 

namespace App\Model\Entity;

use Cake\ORM\Entity;


//This class is the factory of Countries, simplify like the class for validation of number is called.
class CountryFactory { 
	public static function create($country)
	{
		$result = NULL;
		
		//Check Country Name for create the correct class
		switch ($country) {
			case "Cameroon":
				return new Cameroon;
			break;      
			case "Ethiopia":
				return new Ethiopia;
			break;
			case "Morocco":
				return new Morocco;
			break;
			case "Mozambique":
				return new Mozambique;
			break;
			case "Uganda":
				return new Uganda;
			break;
			//When there is no false return
			default:
				return false;
			break;    
		}     
	}
}