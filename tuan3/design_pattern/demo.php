<?php
interface Shape
{
	const SQUARE = 1;
	const CIRCLE = 2;
	const RECTANGE = 3;
	function draw();
}

class Circle implements Shape
{
	public function draw()
	{
		echo "draw circle";
	}
}

class Square implements Shape
{
	public function draw()
	{
		echo "draw square";
	}
}

class Rectange implements Shape
{
	public function draw()
	{
		echo "draw rectange";
	}
}

interface Color 
{
	function fill();
}

class Red implements Color 
{
	public function fill()
	{
		echo "fill red";
	}
}

class Blue implements Color 
{
	public function fill()
	{
		echo "fill blue";
	}
}

class Green implements Color 
{
	public function fill()
	{
		echo "fill green";
	}
}

abstract class AbstracFactory
{
	function getColor($color){

	}
	function getShape($shape){

	}
}

class ShapeFactory extends AbstracFactory
{
	public function getShape($type)
	{
		switch ($type) {
			case Shape::SQUARE:
				return new Square;
				break;
			
			case Shape::RECTANGE:
				# code...
				return new Rectange;
				break;

			case Shape::CIRCLE:
				return new Circle;
				break;
			default:
				# code...
				return null;
				break;
		}
		return null;
	}
}

class ColorFactory extends AbstracFactory
{
	public function getColor($type)
	{
		switch (strtolower($type)) {
			case 'red':
				# code...
				return new Red();
				break;
			
			case 'blue':
				# code...
				return new Blue();
				break;

			case 'green':
				# code...
				return new Green();
				break;
			default:
				# code...
				return null;
				break;
		}
		return null;
	}
}

class FactoryProduct
{
	public static function getFactory($choise)
	{
		$choise = strtolower($choise);
		if($choise == 'shape')
			return new ShapeFactory;
		elseif ($choise == 'color') {
			return new ColorFactory;
		}
		return null;
	}
}


$shapeFactory = FactoryProduct::getFactory('shape');
$shape = $shapeFactory -> getShape(Shape::CIRCLE);
$shape -> draw();

?>