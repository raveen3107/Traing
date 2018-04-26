  <?php
/* class House {

  public $postCode = "560121";

	public function ringBell() {
		echo $this->postCode;
	}
}
$house = new House();
echo $house->postCode;
echo $house->ringBell(); */
//-------------------------
/* class shape{
	public function name(){
		echo "Hi this is parent class";
	}
}
class circle extends shape{
	 public function name(){
		 echo "this another parent class";
    }
	
}
	
	class square extends circle {
		
	}
	$circle=new circle();
	$circle->name();
	$square=new square();
	$square->name(); */
	
	/* interface Shape{
		public function name();
	}
	class circle implements Shape
	{
		public  function name(){
			echo "Hi this is circle class ";
		}
		
	}
	class square implements shape
	{
		public  function name(){
			echo "Hi this is square class ";
		}
	}
	
	function test(Shape $shape)
	{
		$shape->name();
	}
	
	
	test(new circle());
	echo "<br>";
	test( new square()); */
	/* $square=new square();
	$square->name();
	echo "<br>";
	$circle=new circle();
	$circle->name(); */
	
	/* class Person {
	private  $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
	       echo $this->name;
		return $this->name;
	}
}

   $robin = new Person();
   $robin->setName('Robin');
   $robin->getName(); */
   
   class Tv
   {
	   private $isOn=false;
	   
	   public function turnOn(){
		    echo $this->isOn=true;
	   }
	   public function turnOff(){
		   echo $this->isOn=false;
	   }
   }
   $historic=new Tv();
   $historic->turnOn();
   $historic->turnOff();
?> 
