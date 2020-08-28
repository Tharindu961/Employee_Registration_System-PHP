<?php 

	require_once('db.php');
 
 ?>

 <?php 
 		$query = "SELECT * FROM employee";

 		$result = mysqli_query($connect,$query);

 		if(mysqli_num_rows($result) <= 0){
 			echo "<h1>No users Found</h1>";
 		}
 		else{
 			while ($row = mysqli_fetch_array($result)) {
 				echo "Name : ".$row["name"]."<br>";
 				echo "Age : ".$row["age"]."<br>";
 				echo "D:O:B: ".$row["dob"]."<br>";
 				echo "Address: ".$row["address"]."<br>";
 				echo "Position: ".$row["position"]."<br>";
 				echo "Contact No: ".$row["contact"]."<br>";
 				echo "<hr>";
 			}
 		}



  ?>