<?php

namespace App\Model\Entity;

use App\Model\Entity\Country;

    class Morocco implements CountryInterface {		
		
        public function validateNumber($number) {
			$number = preg_replace('~[+ -]~', '', $number);
            return preg_match("/^[212]{3}[5-9]{8}$/", $number);
        }
		
		public function getCountryCode($number) {
			return "+212";
		}
		
		public function getNumberWithoutCC($number) {
			$number = preg_replace('~[+ -]~', '', $number);
			return substr($number,3);
		}
    }