<?php
class Animal {
	public String $family;
	public String $food;
	  function __construct( String $family,String $food) {
    $this->family = $family;
    $this->food = $food;
  }
     function get_family(){
           
            return $this -> family;
     }
     function get_food(){
           
            return $this -> food;
     }
     public function set_family($family) {
     $this->family = $family;
  } 
  public function set_food($food) {
  $this->food = $food;
 }
}
class Cow extends Animal{
	public String $owner; 
	   function get_owner(){
           
            return $this -> owner;
     }
      function set_owner($owner){
           
           $this ->owner= $owner;
     }
   }   
     class Lion extends Animal{ 
       
     }

/**
 * 
 */
class person 
{
	
	public function greet(){
    
	}
}
class English extends person{

}
class German extends person{
	
}
class French extends person{
	
}
$English1=new English();
$English1->greet();






?>