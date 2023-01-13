<?php
	
	namespace Source\Api;
	
	use Source\Api\Traits\TraitEntity;
	
	/**
	 * Class Address
	 *
	 * @package Source\Api
	 *
	 * @author Wagner Corrêa
	 */
	class Address implements \JsonSerializable
	{
		use TraitEntity;
		
		private $city;
		private $complement;
		private $country;
		private $district;
		private $number;
		private $postal_code;
		private $state;
		private $street;
		
		/**
		 * @param $postal_code
		 */
		public function __construct($postal_code = null)
		{
			$this->setPostalCode($postal_code);
		}
		
		/**
		 * @return mixed
		 */
		public function getCity()
		{
			return $this->city;
		}
		
		/**
		 * @param mixed $city
		 */
		public function setCity($city)
		{
			$this->city = (string) $city;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getComplement()
		{
			return $this->complement;
		}
		
		/**
		 * @param mixed $complement
		 */
		public function setComplement($complement)
		{
			$this->complement = (string) $complement;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getCountry()
		{
			return $this->country;
		}
		
		/**
		 * @param mixed $country
		 */
		public function setCountry($country)
		{
			$this->country = (string) $country;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getDistrict()
		{
			return $this->district;
		}
		
		/**
		 * @param mixed $district
		 */
		public function setDistrict($district)
		{
			$this->district = (string) $district;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getNumber()
		{
			return $this->number;
		}
		
		/**
		 * @param mixed $number
		 */
		public function setNumber($number)
		{
			$this->number = (string) $number;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getPostalCode()
		{
			return $this->postal_code;
		}
		
		/**
		 * @param mixed $postal_code
		 */
		public function setPostalCode($postal_code)
		{
			$this->postal_code = (string) $postal_code;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getState()
		{
			return $this->state;
		}
		
		/**
		 * @param mixed $state
		 */
		public function setState($state)
		{
			$this->state = (string) $state;
			return $this;
		}
		
		/**
		 * @return mixed
		 */
		public function getStreet()
		{
			return $this->street;
		}
		
		/**
		 * @param mixed $street
		 */
		public function setStreet($street)
		{
			$this->street = (string) $street;
			return $this;
		}
	}