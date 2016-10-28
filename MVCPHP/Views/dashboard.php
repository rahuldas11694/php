<?php 
function dash($val,$name, $image){
	if($val!==null){
		echo "<h2> $val </h2>";
	}
	else{

 		//echo '<a href="index.php?page=logout"><input type="button" name="logout"  		   	 value="Logout"></a>';

        echo '<p style="color:red; position:relative; top:50% ">'.$name.'</p>';

        echo '<form action="index.php?page=upload" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" value="'.$name.'" name="session_name" /> 
    <input type="submit" value="Upload Image" id="uploadImg" name="submit">
     </form>';

//$ipic = $_SESSION["ipic"];
//echo 'sdfsdfd';

//echo $image;

echo '<img src="'.$image.'" name="imageName" alt="image name" >';



 	}


}
?>
