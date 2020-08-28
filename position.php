<?php
		require_once('db.php');
 ?>

 <?php 

 		if(isset($_POST["add"])){
 			$position = $_POST['position'];
 			$salary = $_POST['salary'];
 			
 			$query = "INSERT INTO position (position, salary) VALUES('$position','$salary')" ;

 			$result = mysqli_query($connect,$query);

 			if($result){
 				header("Location: position.php");
 			}else{

 			}
	 	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Salary</title>
</head>
<body>
	<h1>Position & Salary Structure</h1>
	<form method="post" action="position.php">
		Position: <input type="text" name="position"><br>
		Salary: <input type="text" name="salary"><br>

		<button type="submit" name="add">Add</button>
		<button type="submit" name="view"><a href="positionview.php"> View</button>
		<button type="submit"  name="edit">Edit</button>
		
	</form>
</body>
</html>