<html>
	<body>
		
		<?php
			include "config.php";
			//echo "inSend";
			$table = "";
			$row = (isset($_POST['r'])) ? $_POST['r'] : 1;//$_POST['r']; //from 1 to 10
			$col = (isset($_POST['c'])) ? $_POST['c'] : 3;'no name';//$_POST['c']; //from 1 to 10
			//if(isset($))
			//{
			//	echo "yay!";
			//}
			//echo $row;
			$location = (($row * 12) + $col); //this is the location it will be in the string
			//$location = 4;
			//$ilocation = (int)$location; //no need to convert to int, php will handle it
			
			/*var val = "<?php echo $val ?>";*/
			
			$sql = "SELECT Alive FROM Active WHERE ActiveID = '0'"; //Active
			
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
			
			//loop through string to proper index
			$tablelen = strlen($table);
			for ( $i = 0; $i < $tablelen; $i++)
			{
				if ($i == $location)
				{
					
					$table{$i} = '1';//try setting this to 5 or something to test is is changing the right one
				}
			}
			
			
			$sql = "UPDATE Active SET Alive = '$table' WHERE ActiveID = '0'";
			$result = $conn->query($sql);

			if ($conn->query($sql) === TRUE) {
				
				}
				
			 else {
				//echo "Error inputing value.";
			}


			$sql = "SELECT Alive FROM Active WHERE ActiveID = '0'"; //Active
			
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

			

			
			$conn->close();
		?>
		
	</body>
</html>