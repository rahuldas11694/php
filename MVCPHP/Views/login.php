<?php
class Login{  
		// function validUser()
		// {
		// echo '<body><p>Conratulations! Your Registration is Complete. Thank You.</p>';
		// }
		// function invalidUser()
		// {
		// 	echo '<p> Some fields are missing <p>';
		// }
	function loginPage(){
      if(isset($_COOKIE['rahullocalhost']))
      {
    	echo 'cookie value:'. $_COOKIE['rahullocalhost'];
      }
      else
      {
 		echo "cookie not set ";
      }



		echo'<div id="log-body"> 

		<div align = "center">
			<div style="width:300px;background-color:darkturquoise;; color:black;padding:3px; margin-top:100px"><b>LOGIN</b>
			</div>

		<div style="margin:30px">

			<form action=""  method="post" id="login-form">

				<label class="log-label">Username:</label>
				<input type="text" name="username" placeholder="Enter user name" class="pad"><br/>

				<label class="log-label">Password:</label>
				<input type="password" name="password" placeholder="password" class="pad"><br/>

				<input type="submit" value="Login" name="submit" class="log-submit"><br/>
			</form>

		<div style="font-size:11px; color:blue; margin-top:10px">

		</div>
	</div>';
	



	}
}
?>