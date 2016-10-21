

<?php
class Login
{
	function loginPage()
	{
		echo '<div id="log-body"> 
		       <div align = "center">
		       <div style="width:300px;background-color:darkturquoise;; color:black;padding:3px; margin-top:100px"><b>LOGIN</b></div>


		<div style="margin:30px">
		   
		<form action="checklogin.php"  method="post" id="login-form">
		   
		<label class="log-label">User Name:</label>
		<input type="text" name="username" placeholder="username" class="pad"><br/>

		<label class="log-label">Password:</label>
		<input type="password" name="password" placeholder="password" class="pad"><br/>

		<input type="submit" value="Login" class="log-submit"><br/>


		</form>

		<div style="font-size:11px; color:blue; margin-top:10px">

		</div>
		</div>';
	}
}

$ln = new Login();

?>