<!-- this is view include header and footer here and call it in main  -->




<?php 
function head()
{
echo'<!DOCTYPE html>
     <html>
	<head>
	<link rel="stylesheet" href="Views/css/style.css">
	<title> Header </title>
	 <!--<style type="text/css">
	 	label
	 	{

		}
		.d
		{
		 margin-top:100px;
		}
	</style>-->
    </head>
    
    <body class="header-class">
    <div class="header">
    <span class="yap">Yapsody Ent.</span>
    
    <span><ul class="hdr-ul">
    <li><a href="#logout">Logout</a></li>
    <li><a href="#help"> Help</a></li>

    </ul>
    </span>


    </div>
    
    
    ';
}
?>
