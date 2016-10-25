<?php  

class Controller{

	public function __construct(){
   session_start();
	    // $val1= $_GET['value1'];

	    //session_start();

		require_once("Views/header.php");

		head();

 
    //require("Views/dashboard.php");
    //dash($val1);
     
    $page =$_GET['page'];

		if($page==='login'){

			require_once("Views/login.php");
			//head();
			$ln = new Login();
			$ln->loginPage();


			if(isset($_POST['submit'])){
				require_once('Main/checklogin.php');
				echo 'require login page <br>';

				$checklogin = new Checklogin();
				$checklogin->checklogin();
			}
		}
    
	if($page==='registration'){

		require_once("Views/registration.php");

		$reg = new Registration();

		$reg->registerPage();
	
			if(isset($_POST['submit'])){
				// 		require("Views/login.php");
				//    $ln = new Login();
				// $ln->loginPage();

				require_once("Main/registration.php");
				echo "thank you <br>";

				$signup = new Signup();

				$result = $signup->registration($_POST); //this is func in signup model
				$reg = new Registration();            // this is view

				if($result)
					{
						$reg->showHidden();
					}

				else
					{
						$reg->missingField(); 
					}

			}
	}
		   //}

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

		require_once("Views/footer.php");
			foot();
	}
}

    $cnt =new Controller();
    


?>
 



