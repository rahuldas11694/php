<?php 
function dash($val,$name){
	if($val!==null){
		echo "<h2> $val </h2>";
	}
	else{

 		//echo '<a href="index.php?page=logout"><input type="button" name="logout"  		   	 value="Logout"></a>';

        echo '<p style="color:red; position:relative; top:50% ">'.$name.'</p>';

        echo '<form action="Main/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" value="<?php'. $name.'?>">
    <input type="submit" value="Upload Image" id="uploadImg" name="submit">
    </form>';

 	}
}
?>