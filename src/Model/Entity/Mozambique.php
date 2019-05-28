<?php

namespace App\Model\Entity;

use App\Model\Entity\Country;

    class Mozambique implements CountryInterface {
        public function validateNumber($number) {
			$number = preg_replace('~[+ -]~', '', $number);
            return preg_match("/^[258]{3}[28]{7,8}$/", $number);
        }
		
		public function getCountryCode($number) {
			return "+258";
		}
		
		public function getNumberWithoutCC($number) {
			$number = preg_replace('~[+ -]~', '', $number);
			return substr($number,3);
		}
    }
	
	