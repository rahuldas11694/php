<!-- this act as controller/routing need to use oops concept		 -->
<?php
class Controller
{
 public function __construct(){
 
  $val1= $_GET['value1'];
   
  require("Views/header.php");
  head();
 
 
  //require("Views/dashboard.php");
 
  //dash($val1);
   $page =$_GET['page'];

	if($page=== 'login')   // === checks for the exact datatype and content || == checks only content if datatype do not match it type cast it to the lhs operand
   {
    require("Views/login.php");
    //head();
    $ln->loginPage();
   }

   if($page==='registration')
   {
   	require("Views/registration.php");
   	//head();
   	$reg->registerPage();

   	if($_POST['submit'])
    {
    	require("Main/registration.php");
        $signup->registration($_POST);
   	}
   }

  //  if($page===dashboard)
  //  {
  //  	//require("Views/dashboard.php");
  //  	//dash($val);

  //  //}

  //  include("Main/model.php");
 
  //  $model= new Model(); //can be instantiated here tooooo
  
  // $model->showTable();
  // }
  //include("Views/registration.php");

  require("Views/footer.php");
  	foot();
	}
}

$cnt =new Controller();

?>
 



