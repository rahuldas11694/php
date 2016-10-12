<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>


     <h2>FORM Validation</h2>
    <p><span class="error">*required field</span></p>
    <form  action="validation.php" method="post">
        Name:
        <input type="text" name="name" />
        <span class="error">* </span>
        <br>
        <br> Email:
        <input type="text" name="email" />
        <span class="error">*  </span>
        <br>
        <br> Password:
        <input type="password" name="pwd" />
        <span class="error">*  </span>
        <br>
        <br> Address:
        <textarea name="address" rows="5" cols="40"></textarea>
        <br>
        <br>
        <br> PhoneNumber :
        <input type="text" name="contact" />
        <span class="error">*  </span>
        <br>
        <br>
        <br> Gender:
        <input type="radio" name="gender" /> male
        <input type="radio" name="gender" /> Female
        <span class="error">*  </span>
        <br>
        <br>
        <input type="submit" name="submit" value="submit" />
    </form>




</body>

</html>
