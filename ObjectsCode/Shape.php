<?php
	declare(strict_types=1);
	
	/**
	 * Person class (example of DocBlock)
	 * @author CMSC
	 */
	
	abstract class Shape {
		private $id;
		protected $color;
	
		public function __construct(int $id, string $color) {
			$this->id = $id;		
			$this->color = $color;  
		}
	
		public function __toString() {
			return "Id: {$this->id}, Color: {$this->color}";		
		}

		public function getId() : int {
			return $this->id;
		}
	
		public function getColor() : string {
			return $this->color;
		}
		
		abstract public function draw();
	}
?>