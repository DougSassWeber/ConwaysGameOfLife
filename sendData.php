<html>
	<body>
		
		<?php
			include "config.php";
			//echo "inSend";
			$table = "";
			$row = $_POST['r']; //from 1 to 10
			$col = $_POST['c']; //from 1 to 10
			//if(isset($))
			//{
			//	echo "yay!";
			//}
			$location = (($row * 12) + $col); //this is the location it will be in the string
			//$ilocation = (int)$location; //no need to convert to int, php will handle it
			
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
			
			//loop through string to proper index
			$tablelen = strlen($table);
			for ( $i = 0; $i < $tablelen; $i++)
			{
				if ($i == $location)
				{
					
					$table{$i} = '8';//try setting this to 5 or something to test is is changing the right one
				}
			}
			
			
			$sql = "UPDATE Frozen SET Alive = '$table' WHERE ID = '1'";
			$result = $conn->query($sql);

			if ($conn->query($sql) === TRUE) {
				
				}
				
			 else {
				//echo "Error inputing value.";
			}
			
			$conn->close();
		?>
		
	</body>
</html>