
<?php 

$nameErr = $emailErr = $genderErr = $pwdErr = $phErr = "";

$name =  $email = $gender = $address = $contact = $pwd= "";
/*****************************************************************/
$errorArray = array();
if ($_SERVER["REQUEST_METHOD"]== "POST")   
{

  /************************************* NAME ***************************************/
  //$errorArray = array();
  if(empty($_POST["name"]) )
  {
    $nameErr="Name is Required";
    //echo "missing: $nameErr <br>";   // if missin then print
    $arr = array('name' =>$nameErr);
    $errorArray[] = $arr;
    //echo json_encode($arr);
    //echo '<br>';
  }
  else
  {
      
      $name = $_POST["name"]; //if not missin, validate 

    if (!preg_match("/^[a-z\\s]{1,25}$/i",$name)) // if validation fails execute next line  nd print
    {
      $nameErr = "Only letters and white space allowed";
      //echo "$nameErr";
     $arr = array('name' =>"$nameErr");
         $errorArray[] = $arr;
    //echo json_encode($arr);
    // echo '<br>';


    }
    else     // this else for printing the right form field after right validation 
    { 
      $name = $_POST["name"]; // if validation is right then print this else
      //echo "name is  $name  <br>";
       //header('Content-type: application/json');
        //echo json_encode( $name  );    // json format
        //echo "<br>";


    // }
}
}
/************************************** EMAIL ****************************************/

  if(empty($_POST["email"]))
    {
    $emailErr="email is Required";
    $arr = array('email' => $emailErr );
    $errorArray[] = $arr;
    //echo json_encode($arr);
    // echo " <br>";
    }
  else
    {
      
      $email = $_POST["email"];

      if(!(preg_match("/([\w-]+\@[\w\-]+\.[\w\-]+)/",$email)))    //if not missin, validate 
      {
        $emailErr="Invalid email ";
            $arr = array('email' => $emailErr );
            $errorArray[] = $arr;
           // echo json_encode($arr);
        // echo " <br>";
      }
      else
      { 
        $email = $_POST["email"];
        //echo "$email<br>";

      }
    }
/************************** GENDER ***************************************/


if(empty($_POST["gender"]))
{
$genderErr = "Gender is required";
            $arr = array('gender' => $genderErr );
            $errorArray[] = $arr;
//echo json_encode($arr);
// echo "<br> ";

}
else{
  $gender = $_POST["gender"];
  
  echo "";
}
/******************************* PWD **********************************/
if(empty($_POST["pwd"]))
 {
    $pwdErr="password is Required";
    $arr = array('pwd'=>$pwdErr);
    $errorArray[] = $arr;
    // echo " <br>";
 }
  else{
      
      $pwd = $_POST["pwd"];
      //echo "Pasword  $pwd <br>";       
  }
/****************************** ADDRESS ***********************************/
  if(empty($_POST["address"]))
  {
$address= "missing address";
$arr = array('address'=>$address);
$errorArray[] = $arr;
//echo json_encode($arr);
// echo " <br>";
}
else
{
$address = $_POST["address"];
 // echo "Address : $address <br>";
}
/****************************  CONTACT *************************************/
  if(empty($_POST["contact"]))
  {
$phErr= "Phone number required";
$arr = array("contact"=>$phErr);
$errorArray[] =$arr;
//echo json_encode($arr); 
// echo "<br>";
}
else
{
$contact = $_POST["contact"];
if(!preg_match("/^[0-9]{10}$/", $contact))       //if not missin, validate 
{
    $phErr="please enter valid phone numbar";
    $arr = array("contact"=>$phErr);
    $errorArray[] = $arr;
    //echo json_encode($arr);
    // echo "<br>";
}
else{$phErr="right";
$contact =$_POST["contact"];
//echo "$contact <br>";

//   }
// $arr = array('name' =>$_POST['$nameErr']);
// echo json_encode($arr);

}

 }
// $arr = array('name' =>$_POST['$nameErr']);
// echo json_encode($arr);

}

$json = $errorArray;
echo json_encode($json);
echo  run();


/*****************************************************************/
?>