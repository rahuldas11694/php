
<!-- 
<?php 
  //$name = $_POST['name'];
  //$email = $_POST['email'];
  //$contact = $_POST['contact'];
  //$gender = $_POST['gender'];
  //$address = $_POST['address'];
   //echo "$name<br>"; 
   //echo "$email<br>";
   //echo "$contact<br>";
   //echo "$gender<br>";
   //echo "$address<br>";


?> -->

<?php 

$nameErr = $emailErr = $genderErr = $pwdErr = $phErr = "";

$name =  $email = $gender = $address = $contact = $pwd= "pp";
/*****************************************************************/
if ($_SERVER["REQUEST_METHOD"]== "POST")   
{

  /************************************* NAME ***************************************/

  if(empty($_POST["name"]) )
  {
    $nameErr="Name is Required";
    //echo "missing: $nameErr <br>";   // if missin then print
    $arr = array('name' =>$nameErr);
    echo json_encode($arr);
    echo '<br>';
  }
  else
  {
      
      $name = $_POST["name"]; //if not missin, validate 

    if (!preg_match("/^[a-z\\s]{1,25}$/i",$name)) // if validation fails execute next line  nd print
    {
      $nameErr = "Only letters and white space allowed";
      //echo "$nameErr";

     $arr = array('name' =>"$nameErr");
    echo json_encode($arr);
    echo '<br>';

    }
    else     // this else for printing the right form field after right validation 
    { return;
      $name = $_POST["name"]; // if validation is right then print this else
      echo "name is  $name  <br>";
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
    echo "missing $emailErr  <br>";
    }
  else
    {
      
      $email = $_POST["email"];

      if(!(preg_match("/([\w-]+\@[\w\-]+\.[\w\-]+)/",$email)))    //if not missin, validate 
      {
        $emailErr="Invalid email ";
        echo "$emailErr <br>";
      }
      else
      {
        $email = $_POST["email"];
        echo "$email<br>";

      }
    }
/************************** GENDER ***************************************/


if(empty($_POST["gender"]))
{
$genderErr = "Gender is required";
echo "missing: $genderErr <br> ";

}
else{
  $gender = $_POST["gender"];
  
  echo "$gender<br>";
}
/******************************* PWD **********************************/
if(empty($_POST["pwd"]))
 {
    $pwdErr="password is Required";
    echo "missing: $pwdErr  <br>";
 }
  else{
      
      $pwd = $_POST["pwd"];
      echo "Pasword  $pwd <br>";       
  }
/****************************** ADDRESS ***********************************/
  if(empty($_POST["address"]))
  {
$address= "missing address";
echo "you address is:$address  <br>";
}
else
{
$address = $_POST["address"];
  echo "Address : $address <br>";
}
/****************************  CONTACT *************************************/
  if(empty($_POST["contact"]))
  {
$phErr= "Phone number required";
echo "missing: $phErr  <br>";
}
else
{
$contact = $_POST["contact"];
if(!preg_match("/^[0-9]{10}$/", $contact))       //if not missin, validate 
{
    $phErr="please enter valid phone numbar";
    echo "$phErr";
}
else{$phErr="right";
$contact =$_POST["contact"];
echo "$contact <br>";

//   }
// $arr = array('name' =>$_POST['$nameErr']);
// echo json_encode($arr);

}


 }
// $arr = array('name' =>$_POST['$nameErr']);
// echo json_encode($arr);

}
/*****************************************************************/
?>