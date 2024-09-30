<?php
	declare(strict_types=1);
	require("Shape.php");
		
	class Rectangle extends Shape {
		public function __construct($id, $color) {
			parent::__construct($id, $color);
		}
		
        public function draw() {
			echo "Drawing a rectangle";
		}
    }
	
	class Circle extends Shape {        
		public function __construct($id, $color) {
			parent::__construct($id, $color);
		}
		
        public function draw() {
			echo "Drawing a circle";
		}
    }
    
    function processShape(Shape $myShape) {
		echo "$myShape<br>";
	}
	
	processShape(new Rectangle(100, "blue"));
	processShape(new Circle(200, "red"));
?>