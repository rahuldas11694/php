

<?php 
class Myclass {
	const CONST_VALUE = 'the constant value';
}

$classname = 'Myclass';

echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE .'<br>'. PHP_EOL // from outside the class definition
?>
<?php

class OtherClass extends MyClass{
    
    public static $my_Static = 'static var';

    public static function doubleColon()
    {
       echo parent::CONST_VALUE . "\n";
       echo self::$my_Static . "\n";

    }
}

$classname='OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();
?>