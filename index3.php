<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    .error {
        color: red;
    }
    </style>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="http://www.rahullocal.com/Library/WebServer/Documents/js/submit.js"></script>
 -->
</head>

<body>


     <h2>FORM Validation</h2>
    <p><span class="error">*required field</span></p>
        <form  action="" method="post" id="form_sub">
        Name:
        <input type="text" name="name" id="name"/>
        <span class="error">* </span>
        <br>
        <br> Email: 
        <input type="text" name="email" id="email" />
        <span class="error">*  </span>
        <br>
        <br> Password:
        <input type="password" name="pwd" id='pwd' />
        <span class="error">*  </span>
        <br>
        <br> Address:
        <textarea name="address" id="address" rows="5" cols="40"></textarea>
        <br>
        <br>
        <br> PhoneNumber :
        <input type="text" name="contact" id="contact" />
        <span class="error">*  </span>
        <br>
        <br>
        <br> Gender:
        <input type="radio" name="gender" class='gmale' value=male/> male
        <input type="radio" name="gender" class='gfemale' value=female /> Female
        <span class="error">*  </span>
        <br>
        <br>
        <input type="submit" name="submit" value="submit" />
    </form>

    <div id="success"></div>
    <div id="success1"></div>
    <div id="success"></div>
    <div id="success"></div>
    <div id="success"></div>

    <div id="data"></div>
    <div id="dataArray"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="submit.js"></script>
 </body>

</html>
