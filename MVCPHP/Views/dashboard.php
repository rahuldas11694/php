<?php 
function dash($val,$name){
	if($val!==null){
		echo "<h2> $val </h2>";
	}
	else{

 		echo '<a href="index.php?page=logout"><input type="button" name="logout"  		   	 value="Logout"></a>';

        echo '<p style="color:red; position:relative; top:50% ">'.$name.'</p>';

 	}
}
?>