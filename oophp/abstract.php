<?php
 abstract class AbstractClass
 {
 abstract protected function getvalue();
 abstract protected function prefixValue($prefix);


//common method
public function printOut()
{
	print $this->getValue()."\n";
}
} 

class ConcreteClass1 extends AbstractClass
{
	protected function getValue()
	{
		return "Concreteclass1";

	}

	public function prefixValue($prefix)
	{
		return "{$prefix}Concreteclass1";

	}
}

    class ConcreteClass2 extends AbstractClass
    {
    	public function getValue()
    	{
    	return "Concreteclass2";
    		
    	}
       
         public function prefixValue($prefix)
         {
         	return "{$prefix}Concreteclass2";
         }
    }


$class1 = new Concreteclass1;
$class1->printOut();

echo $class1->prefixValue('FOO_')."\n";

$class2 = new Concreteclass2;
$class2->printOut();

echo $class2->prefixValue('Fooooo') ."\n";

?>   