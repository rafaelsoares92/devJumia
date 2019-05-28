<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class DevjumiaController extends AppController {
	public function index()
    {	
		//Load phone numbers for list
		$phoneNumbers = TableRegistry::get('PhoneNumbers')->find();
		$this->set('phoneNumbers', $phoneNumbers);
		
		//Load countries for dropdown
		$countries = TableRegistry::get('PhoneNumbers')->find('all', [
			'order' => ['country']	
		])->distinct(['country']);
		$this->set('countries', $countries);
    }
}