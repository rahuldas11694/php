<?php 

$nameErr = $emailErr = $genderErr = $pwdErr = $phErr = "";

$name =  $email = $gender = $address = $contact = $pwd= "";
/*****************************************************************/
$errorArray = array();
if ($_SERVER["REQUEST_METHOD"]== "POST")   
{
  /************************************* NAME ***************************************/
   if(empty($_POST["name"]) )
  {
    $nameErr="Name is Required";
    
    $arr = array('name' =>$nameErr);
    $errorArray[] = $arr;
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

    }
    else     // this else for printing the right form field after right validation 
    { 
      $name = $_POST["name"]; // if validation is right then print this else

}
}
/************************************** EMAIL ****************************************/

  if(empty($_POST["email"]))
    {
    $emailErr="email is Required";
    $arr = array('email' => $emailErr );
    $errorArray[] = $arr;
    
    }
  else
    {
      
      $email = $_POST["email"];

      if(!(preg_match("/([\w-]+\@[\w\-]+\.[\w\-]+)/",$email)))    //if not missin, validate 
      {
        $emailErr="Invalid email ";
            $arr = array('email' => $emailErr );
            $errorArray[] = $arr;
       }
      else
      { 
        $email = $_POST["email"];
      }
    }
/************************** GENDER **************************************/
if(empty($_POST["gender"]))
{
$genderErr = "Gender is required";
            $arr = array('gender' => $genderErr );
            $errorArray[] = $arr;
}
else{
  $gender = $_POST["gender"];
  }
/******************************* PWD **********************************/
if(empty($_POST["pwd"]))
 {
    $pwdErr="password is Required";
    $arr = array('pwd'=>$pwdErr);
    $errorArray[] = $arr;
 }
  else{
      $pwd = $_POST["pwd"];
         }
/****************************** ADDRESS ***********************************/
  if(empty($_POST["address"]))
  {
$address= "missing address";
$arr = array('address'=>$address);
$errorArray[] = $arr;
}
else
{
$address = $_POST["address"];

}
/****************************  CONTACT *************************************/
  if(empty($_POST["contact"]))
  {
$phErr= "Phone number required";
$arr = array("contact"=>$phErr);
$errorArray[] =$arr;
 }
else
{
$contact = $_POST["contact"];
if(!preg_match("/^[0-9]{10}$/", $contact))       //if not missin, validate 
{
    $phErr="please enter valid phone numbar";
    $arr = array("contact"=>$phErr);
    $errorArray[] = $arr;

}
else{$phErr="right";
$contact =$_POST["contact"];
    }
 }
    

if ($errorArray==null)
{
echo "SUCCESSFUL SUBMISSION";
  return;
}
else{

$json = $errorArray;

 echo (json_encode($json));
}
}
/*****************************************************************/
?>