<?php 
include('MVCPHP/index.php');
$target_dir = "../Views/uploads/";

$target_file = $target_dir . time() . basename($_FILES["fileToUpload"]["name"]);

$uploadOk=1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//check if img is actual img or fake img

if(isset($_POST['submit']))
    {
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if($check !== false)
        {
            echo '<br>File is an image -' . $check['mime'].".";
            $uploadOk=1;
        } else {
            echo 'file is not an image.';
            $uploadOk=0;    
        }
    }

// check if file already exists
if (file_exists($target_file)){
     echo "Sorry, file already exists.<br>";
     $uploadOk=0;
}

// check file size

if($_FILES['fileToUpload']['size']>  500000){
    echo 'Sorry, your file is too large<br>';
    $uploadOk = 0;
}

//allow certain file format
if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' && $imageFileType != 'gif'){
        echo "<br>Sorry , only jpg, jpeg, png & gif files are allowed.";
        $uploadOk = 0;
}

 // check if $uploadOk is set to 0 by an error

 if($uploadOk == 0)
 {
    echo 'Sorry, your file was not uploaded';
 } 
 else{
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){

            echo '<br>The file' . basename($_FILES['fileToUpload']['name']). "has been uploaded";
/*************************************************************/
        $servername = "localhost";
        $server_username = "root";
        $password = "";
        $dbname = "securityDB";
        $tbl_name="auth_user"; 

        // Create connection
        //$conn = new mysqli($servername, $username, $password);
        // Check connection

        $conn= mysqli_connect($servername, $server_username, $password,$dbname);

        if ($link===false){
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            echo '<br>connected<br>';
        }
 echo $target_file."target_file";
echo $name;

        $sql= "update auth_user set imageName = ".$target_file." where username =".$_SESSION['username'];


/*************************************************************/
        }
        else{
            echo 'Sorry, there was an error uploading your file..';
        }
 }  
 


?>