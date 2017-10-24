<html>
	<body>
		
		<?php
			include "config.php";
			//echo "inRetrieve";
			$table = "";
			
			
			/*var val = "<?php echo $val ?>";*/
			
			$sql = "SELECT Alive FROM Frozen WHERE ID = '1'"; //Active
			
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				//	echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				//echo  $row["first"]. " " . $row["last"]. "<br>";
					$table = $row["Alive"];
				}
			
	
			}
		//		else {
			//	echo "0 results";
			//}


		        echo $table;
			
			
			$conn->close();
		?>
		
	</body>
</html>