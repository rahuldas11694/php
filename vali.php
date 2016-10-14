<?php 

$nameErr = $emailErr = $genderErr = $pwdErr = $phErr = "";

$name =  $email = $gender = $address = $contact = $pwd= "";
/*****************************************************************/

if ($_SERVER["REQUEST_METHOD"]== "POST")   
{
  /************************************* NAME ***************************************/
  header('Content-Type:application/json');
  //$response[]=array();
   if(empty($_POST["name"]) )
  {
    $response[]=array(
       //"Error"=>true,
       "ErrorMessage"=>"name required",
       //"Response"=>false
      );
    //echo json_encode($response);
  }
  else
  {
    $name = $_POST["name"]; //if not missin, validate 

    if (!preg_match("/^[a-z\\s]{1,25}$/i",$name)) // if validation fails execute next line  nd print
    {
      $nameErr = "Only letters and white space allowed";
        $response[]=array(
       //"Error"=>true,
       "ErrorMessage"=>"name spaces letters reqd",
       //"Response"=>false
      );
    //echo json_encode($response);

    }
    else     // this else for printing the right form field after right validation 
    { 
      $name = $_POST["name"]; // if validation is right then print this else

}
}
////////////////////////////////
if(empty($_POST["email"]))
    {
    $response[]=array(
       //"Error"=>true,
       "ErrorMessage"=>"email required",
       //"Response"=>false
      );
    //echo json_encode($response);
    }
  else
    {
      $email = $_POST["email"];

      if(!(preg_match("/([\w-]+\@[\w\-]+\.[\w\-]+)/",$email)))    //if not missin, validate 
      {
    $response[]=array(
       //"Error"=>true,
       "ErrorMessage"=>"enter valid email",
       //"Response"=>false
      );
    //echo json_encode($response);
       }
      else
      { 
        $email = $_POST["email"];
      }
    }


    /************************** GENDER **************************************/
    if(empty($_POST["gender"]))
     {
    $response[]=array(
       //"Error"=>true,
       "ErrorMessage"=>"click on any one radio button",
       //"Response"=>false
      );
    //echo json_encode($response);
      }
     else{
      $gender = $_POST["gender"];
        }
/******************************* PWD **********************************/
      if(empty($_POST["pwd"]))
        {
      $response[]=array(
       // "Error"=>true,
       "ErrorMessage"=>"password required",
       // "Response"=>false
      );
     //echo json_encode($response);
         }
     else{
      $pwd = $_POST["pwd"];
         }
/****************************** ADDRESS ***********************************/
     if(empty($_POST["address"]))
       {
        $response[]=array(
       // "Error"=>true,
       "ErrorMessage"=>"Address required",
       // "Response"=>false
      );
    //echo json_encode($response);
}
else
{
$address = $_POST["address"];

}
/****************************  CONTACT *************************************/
  if(empty($_POST["contact"]))
  {

        $response[]=array(
       // "Error"=>true,
       "ErrorMessage"=>"phone number required",
       // "Response"=>false
      );
    //echo json_encode($response);
 }
else
{
$contact = $_POST["contact"];
if(!preg_match("/^[0-9]{10}$/", $contact))       //if not missin, validate 
{

      $response[]=array(
       // "Error"=>true,
       "ErrorMessage"=>"enter 10 digit number",
       // "Response"=>false
      );
    //echo json_encode($response);

}
else{$phErr="right";
$contact =$_POST["contact"];
    }
 }
//$json[] =$response;
$json= array(

  "Error"=>true,
  "message"=>$response,
  "Response"=>false

);

echo json_encode($json);
    
}

  
?>

  