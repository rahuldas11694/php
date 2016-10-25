<?php

class  Checklogin{

	function checklogin(){

		if($_SERVER["REQUEST_METHOD"]=="POST"){
	//session_start();// start session at the beginning of the code not here before html ok

			// $username = $_POST["username"];

			// $password = $_POST["password"];

			//to prevent SQL injection

			//$username	=stripslashes($username);

			//$password=stripslashes($password);

			$server = "localhost";
			$server_username = "root";
			$password = "";
			$dbname = "securityDB";
			$tbl_name = "auth_user";

			$conn = mysqli_connect($server,$server_username,$password,$dbname);

				if($conn==='false'){
						die("connection_aborted:" .mysqli_connect_error());
				}
					else{
						echo "connected <br>";
					}

                $username=mysqli_real_escape_string($conn,$_POST['username']);
                $password =mysqli_real_escape_string($conn,$_POST['password']);

				$sel_user="SELECT * FROM auth_user WHERE username='$username' AND password='$password'";

				$run_user = mysqli_query($conn,$sel_user);

				$check_user = mysqli_num_rows($run_user);

				if($check_user>0)
				{
					$_SESSION['username']= $username;
				    
				    echo "valid user";

				    
				}				
        		
        		else{
        			echo "invalid user";
        		}

			}

		}

	}
	


?>