<?php 

$nameErr = $emailErr = $genderErr = $pwdErr = $phErr = "";

$name =  $email = $gender = $address = $contact = $pwd= "";
/*****************************************************************/
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
  /************************************* NAME ***************************************/

  if(empty($_POST["name"]))
  {
    $nameErr="Name is Required";
    echo "missing: $nameErr <br>";   // if missin then print
  }
  else
  {
      
      $name = $_POST["name"]; //if not missin, validate 

    if (!preg_match("/^[a-z\\s]{1,25}$/i",$name)) // if validation fails execute next line  nd print
    {
      $nameErr = "Only letters and white space allowed <br>";
      echo "$nameErr";
    }
    else
    {
      $name = $_POST["name"]; // if validation is right then print this else
      echo "name is  $name  <br>";
       //header('Content-type: application/json');
        echo json_encode( $name  );
        echo "<br>";


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

  }

}
}
/*****************************************************************/

function test_input($data)        //   this is to trim all the spaces characters 
{
$data = trim($trim);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?> 



<!-- your name is <?php echo $_POST["name"]; ?><br>
 Your email is <?php echo $_POST["email"]; ?>.<br>
 Your pwd is <?php echo $_POST["pwd"]; ?>.<br>
 Your phone number is <?php echo $_POST["contact"]; ?>.<br>
 Your address is <?php echo $_POST["address"]; ?>.<br>
 Your gender is <?php echo $_POST["gender"]; ?>.
 -->

