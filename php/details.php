<html>
<body>
<form method="post" action=" ">
<label for="name">Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name"><br>
<label for="email">Email id:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email"><br>
<label for="address">Address:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea name="address" rows="4"></textarea><br>
<label for="gender">Gender:</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="gender">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Others</option>
</select><br>
<label for="dob">D.O.B:</lable>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" name="dob"><br>
<input type="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
<?php
   if($_POST){
                                    $name=$_REQUEST["name"];
		echo "Name= $name"."<br>";
		$email=$_REQUEST["email"];
		echo "Email= $email"."<br>";
 		$address = $_REQUEST['address'];
		echo "Address=$address"."<br>";
		$gender=$_REQUEST["gender"];
		echo "Gender= $gender"."<br>";
		$dob=$_REQUEST["dob"];
		echo "D.O.B=$dob"."<br>";
		}
	?>
  </body>
</html>