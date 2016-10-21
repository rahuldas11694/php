<?php 

class Foo
{
	public function printItem($string)
	{
	    echo 'Foo: ' .$string . PHP_EOL;

	}

	public function printPHP()
	{
	   echo 'php is great..' . PHP_EOL;
	}
}

class Bar extends Foo
{
	  public function printItem($string)
	  {
	      echo 'Bar: '. $string .PHP_EOL;
	  }
}


$foo =new Foo();
$bar =new Bar();

$foo->printItem('bazfgjfxnf');
$foo->printPHP();
$bar->printItem('baxsjdknfs');




?>
