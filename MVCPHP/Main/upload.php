<?php 




    $target_dir = "Views/uploads/";

    $target_file = $target_dir . mt_rand() . basename($_FILES["fileToUpload"]["name"]);

    $uploadOk=1;

    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //check if img is actual img or fake img

    if(isset($_POST['submit']))
        {
            echo $_POST;
            $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
            if($check !== false)
                {
                //echo '<br>File is an image-' . $check['mime'].".";
                    $uploadOk=1;
                }
            else {

                echo 'file is not an image.';
                $uploadOk=0;    
            }
        }

        // check if file already exists
        if (file_exists($target_file)){
            //echo "Sorry, file already exists.<br>";
            $uploadOk=0;
        }

// check file size

        if($_FILES['fileToUpload']['size']>  500000){
            // echo 'Sorry, your file is too large<br>';
            $uploadOk = 0;
        }

//allow certain file format
        if($imageFileType != 'jpg' && $imageFileType !='png' && $imageFileType !='jpeg' && $imageFileType != 'gif'){

            //echo "<br>Sorry , only jpg, jpeg, png & gif files are allowed.";
            $uploadOk = 0;
        }

// check if $uploadOk is set to 0 by an error

        if($uploadOk == 0)
            {
        //echo 'Sorry, your file was not uploaded';
        } 
        else{
    
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){

            //echo '<br>The file' . basename($_FILES['fileToUpload']['name']). "has been uploaded";
/*************************************************************/
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "securityDB";
                $tbl_name="auth_user"; 

                // Create connection

                // Check connection

                $conn = mysqli_connect($servername, $username, $password,$dbname);

                    if ($conn ===false){
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else{
                        // echo '<br>connected<br>';
                    }
    //echo time() . basename($_FILES["fileToUpload"]["name"])."target_file";
            $imageName=$target_file;
            echo "=========";
            print_r( $_POST);
            echo "=========";

            echo "<br>qwertyu<br>".$_POST['session_name'];
            $_SESSION["ipic"]=$imageName;
            $name=$_POST['session_name'];

    // $sql= "insert into auth_user(imageName) values ('$imageName')";

            $sql="UPDATE auth_user SET imageName='$imageName' WHERE username='$name'"; // $imageName And $name should be in single Quote otherwise it will throw an sql error; 
            // Store image name in session.
            if(mysqli_query($conn,$sql)){

                $_SESSION["ipic"]=$imageName;

                echo "<br>".$_SESSION["ipic"];

                // $getimgNm =mysqli_fetch_assoc(mysqli_query($conn, "SELECT imageName FROM auth_user WHERE username = '$name'"));

                //     $img = $getimgNm['imageName'];
                //     echo $img;

                //     echo '<img src="Views/uploads/'.$img.'" name="imageName" alt="image name" />';

                echo '<meta http-equiv="refresh" content="0; URL=http://www.rahullocal.com/MVCPHP/index.php?page=dashboard">';



                return true;
    //echo "<p id ='signup' style='color:red'>new registration record inserted into db<p>";
            }
            else{
                echo "sql Error:".$sql ."<br>connection" . mysqli_error($conn);
        }
/*************************************************************/
    }
            else{
            echo 'Sorry, there was an error uploading your file..';
            }   
        }  



?>