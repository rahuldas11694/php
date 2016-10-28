<?php  

class Controller{

	public function __construct(){
    session_start();
	    // $val1= $_GET['value1'];

	    //session_start();

		// require("Views/header.php");

		// head();

 
    //require("Views/dashboard.php");
    //dash($val1);
     
    $page =$_GET['page'];

		if($page==='login'){

			require("Views/header.php");

			head1();

			require_once("Views/login.php");
			//head();
			$ln = new Login();
			$ln->loginPage();


			if(isset($_POST['submit'])){
				require_once('Main/checklogin.php');
				//echo 'require login page <br>';

				$checklogin = new Checklogin();
				$check_user=$checklogin->checklogin();
				echo "returned value".$check_user;

				if($check_user=='1'){
				echo '<meta http-equiv="refresh" content="0; URL=http://www.rahullocal.com/MVCPHP/index.php?page=dashboard">';

				}

				else{
					echo "<script>
					alert('Not a Valid User');
					</script>";
				}		
			}
		}

	if($page==='registration'){
         require('Views/header.php');
         head3();

		require("Views/registration.php");

		$reg = new Registration();

		$reg->registerPage();
	
			if(isset($_POST['submit'])){
				// 		require("Views/login.php");
				//    $ln = new Login();
				// $ln->loginPage();

				require_once("Main/registration.php"); 
				//echo "thank you <br>";

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

		   	if($page==='dashboard')
		   	   {
		   	   	$_SESSION['username'];

		   	   	require('Views/header.php');
		   	   	require('Main/dbdata.php');
		   	   	

		   	   	head2();
		   	   	dbData();  //calling fun to display all the data form db

		   	 		if(!$_SESSION['username'])
		   	 			{
		   	 			echo '<meta http-equiv="refresh" content="0; URL=http://www.rahullocal.com/MVCPHP/index.php?page=login">';	
	   						
		   	 			}
	   				else{
		   					//require("Views/dashboard.php");
		   					//dash($val);
	   					   $ssnUsrName=$_SESSION['username'];
		   					//echo '<p style="color:red">'.$_SESSION['username'].'</p>';
		   					include('Views/dashboard.php');
		   					dash($val,$ssnUsrName, $_SESSION['ipic']);
			   	 			return;
	   				}


		   		}

	   		if($page==='upload'){
	   			require('Main/upload.php');
	   			$_SESSION['ipic'];
	   			return;

	   		}



          


        
        if($page==='logout')
        {
          // require('Views/header.php');
          // head2();
		    //echo "<p style='color:red; position:relative; top:50%'>session_destroying</p>";
			
			session_destroy();
		    require('Views/header.php');
          head2();
		    //echo "<p style='color:red; position:relative; top:50%'>session_destroyed now</p>";

		    echo "<p style='color:red; position:relative; top:70%'>You are being redirected to login page, wait 5seconds.</p>";
 			
		   echo '<meta http-equiv="refresh" content="5;url=http://www.rahullocal.com//MVCPHP/index.php?page=login" />';

 			//echo '<meta http-equiv="refresh" content="5000; URL=http://www.rahullocal.com/MVCPHP/index.php?page=login">';


        	
        }





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