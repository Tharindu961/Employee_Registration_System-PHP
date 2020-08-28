<?php 

	require_once('db.php');

 ?>

 <?php 
 		$query = "SELECT * FROM position";

 		$result = mysqli_query($connect,$query);

 		if(mysqli_num_rows($result) <= 0){
 			echo "<h1>No users Found</h1>";
 		}
 		else{
 			while ($row = mysqli_fetch_array($result)) {
 				echo "Position : ".$row["position"]."<br>";
 				echo "Salary : ".$row["salary"]."<br>";
 				echo "<hr>";
 			}
 		}



  ?>