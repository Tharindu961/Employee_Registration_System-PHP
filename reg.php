<?php 
	require_once('db.php');


 ?>
 <?php 

 		if(isset($_POST["add"])){
 			$name = $_POST['name'];
 			$age = $_POST['age'];
 			$dob = $_POST['dob'];
 			$address = $_POST['address'];
 			$contact = $_POST['contact'];
 			

 			$query = "INSERT INTO employee (name, age, dob, address, contact) VALUES('$name','$age','$dob','$address','$contact')" ;

 			$result = mysqli_query($connect,$query);

 			if($result){
 				header("Location: reg.php");
 			}else{

 			}
	 	}


  ?>
  <?php
  	$query = "SELECT * FROM position";
  	$result = mysqli_query($connect,$query);
  	if(mysqli_fetch_array($result)){
  		
  	}

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Emplyee Details</title>
</head>
<body>
	<div class="form">
		<h1>Register</h1>
			<form method="post" action="reg.php">
				Name : <input type="text" name="name"> <br>
				Age : <input type="text" name="age"> <br>
				Dob : <input type="date" name="dob"> <br>
				Address : <input type="text" name="address"> <br>
				Contact No : <input type="text" name="contact"> <br>
				Position : <select name="position">
							<option value="junior" id="jwd">Junior Web Developer</option>
							<option value="senior" id="swd">Senior Web Developer</option></select><br>
				Salary: <input type="" name=""><br>

		<button type="submit" name="add">Add</button>
		<button type="submit" name="view"><a href="empview.php">View</a></button>
		<button type="submit" name="edit">Edit</button>
		<button type="submit" name="inactive">Inactive</button>
		</form>
		
	</div>

</body>
</html>