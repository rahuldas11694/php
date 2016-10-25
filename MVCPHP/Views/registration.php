<?php
class Registration{

	function showHidden(){
		echo '<body><p>Conratulations! Your Registration is Complete. Thank You.</p>';
	}
	
	function missingField(){
		echo '<p> Some fields are missing <p>';
	}

	function registerPage(){
			//echo '<body><p>Conratulations! Your Registration is Complete. Thank You.</p>';

echo  '
<!--<div class="reg-body">-->

	<div class="emp-data" >
		<span class="ed">Employee Data</span>
		<hr id="line">
			<form action="" method="post"  id="reg-form">  
			<div class="d">
				<label class="reg-label">Employee Name:</label>  <input type="username" placeholder="Name" name="username" class="empName wid"  /><br>

				<label class="reg-label">Employee Id:</label>  <input type="empId" name="password" placeholder="Your Id" class="empId wid " name="empId" /><br>

				<label class="reg-label">password:</label>  <input type="password" placeholder="eg-@urhf873&*HS" class="empId wid" name="password"/><br>


				<label class="reg-label">Date of Birth: </label> <input type="date of birth" placeholder="D.O.B" class="DOB wid" name="DOB" /><br>

				<label class="reg-label">Email: </label> <input type="email" name="email" placeholder="Email Address" class="email wid" /><br>

				<label class="reg-label">Contact Number:</label> <input type="telephone" name="teli" placeholder="eg-2346579494" class="teli wid" /><br>

				<label class="reg-label">Address:</label> <textarea rows="4" cols="50" placeholder="Residese" name="address" class="address wid"></textarea> <br>

				<label class="reg-label">Department:</label><input type="text"  name="department"  type="department" class="dept wid"><br>
				<label class="reg-label">Join Date:</label><input type="text" name="DOJ" type="jd" class="joinDate wid"><br>

			<input type="submit" value="Submit" name="submit" class="submit" />

	</div>
	</form>

</div>	';
	}
}
//$reg= new Registration();
?>