<?php

namespace App\Model\Entity;

use App\Model\Entity\Country;

    class Cameroon implements CountryInterface {
        public function validateNumber($number) {
			$number = preg_replace('~[+ -]~', '', $number);
            return preg_match("/^[237]{3}[2368]{7,8}$/", $number);
        }
		
		public function getCountryCode($number) {
			return "+237";
		}
		
		public function getNumberWithoutCC($number) {
			$number = preg_replace('~[+ -]~', '', $number);
			return substr($number,3);
		}
    }