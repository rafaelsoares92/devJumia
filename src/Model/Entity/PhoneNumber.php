<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class PhoneNumber extends Entity
{
	function getState(){
		$Country = CountryFactory::create($this->get('Country'));
		if ($Country == false) {
			return false;
		}
		
		return $Country->validateNumber($this->get('PhoneNumber'));
	}
	
	public function getCountryCode() {
		$Country = CountryFactory::create($this->get('Country'));
		if ($Country == false) {
			return "unavailable";
		}
		
		return $Country->getCountryCode($this->get('PhoneNumber'));
	
	}
	
	public function getNumberWithoutCC() {
		$Country = CountryFactory::create($this->get('Country'));
		if ($Country == false) {
			return $this->get('PhoneNumber');
		}
		
		return $Country->getNumberWithoutCC($this->get('PhoneNumber'));
	
	}
}