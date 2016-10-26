<?php
class Logout
{
function __construct()
{
	//session_start();
	echo "<p style='color:red; position:relative; top:50%'>session_destroying</p>";
	
	session_destroy();
    
    echo "<p style='color:red; position:relative; top:50%'>session_destroyed now</p>";
}

}




?>