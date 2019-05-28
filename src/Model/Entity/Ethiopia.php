<?php

namespace App\Model\Entity;

use App\Model\Entity\Country;

    class Ethiopia implements CountryInterface {
        public function validateNumber($number) {
			$number = preg_replace('~[+ -]~', '', $number);
            return preg_match("/^[251]{3}[1-59]{8}$/", $number);
        }
		
		public function getCountryCode($number) {
			return "+251";
		}
		
		public function getNumberWithoutCC($number) {
			$number = preg_replace('~[+ -]~', '', $number);
			return substr($number,3);
		}
    }