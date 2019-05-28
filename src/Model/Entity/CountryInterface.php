<?php

namespace App\Model\Entity;


//Interface of class that have how function to realize the validations about number by countries
    interface CountryInterface {
		
        public function validateNumber($number);
		
		public function getCountryCode($number);
		
		public function getNumberWithoutCC($number);
		
    }