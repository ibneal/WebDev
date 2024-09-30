<?php
	declare(strict_types=1);
	
	namespace Health\People;
	
	class Doctor {
		private $name;
		protected $address;
	
		public function __construct(string $pname, string $address) {
			$this->name = $pname;		// Notice this->name (no $ for name)
			$this->address = $address;  // We need $this-> to refer to data members
		}
	
		public function __toString() {
			return "<b>Doctor's Name:</b> ".$this->name.", <b>Address:</b> ".$this->address;		
		}
	}
?>