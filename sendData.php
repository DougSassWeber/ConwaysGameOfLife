<html>
	<body>
		<p>
		<?php
			include config.php
			$row = "x"; //this is sent with the row it will be in the string, Doug will send it incremented by 1
			$col = "y";
			$table;
			/*var val = "<?php echo $val ?>";*/
			
			$sql = "SELECT alive FROM Frozen WHERE id = "1"; //Active
			
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				//	echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				//echo  $row["first"]. " " . $row["last"]. "<br>";
					$table = $row["alive"];
				}
				
	
			//} else {
			//	echo "0 results";
			//}
			
			//loop through string to proper index
			$tablelen = strlen($table)
			for (int $i = 0; $i < $tablelen; $i++)
			{
				if ($i == (($row * 12) + $col)
				{
					
					$table{$i} = '1';//try setting this to 5 or something to test is is changing the right one
				}
			}
			
			
			$sql = "INSERT INTO Frozen(alive) VALUES ('$table') WHERE id = '1'";
			//$result = $conn->query($sql);

			if ($conn->query($sql) === TRUE) {
				
				}
				
			 else {
				echo "Error inputing value.";
			}
			
			$conn->close();
		?>
		</p>
	</body>
</html>