<?php

namespace App\Model\Entity;

use App\Model\Entity\Country;

    class Uganda implements CountryInterface {
        public function validateNumber($number) {
			$number = preg_replace('~[+ -]~', '', $number);
            return preg_match("/^[256]{3}[0-9]{9}$/", $number);
        }
		
		public function getCountryCode($number) {
			return "+256";
		}
		
		public function getNumberWithoutCC($number) {
			$number = preg_replace('~[+ -]~', '', $number);
			return substr($number,3);
		}
    }