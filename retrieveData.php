<?php
			include "config.php";
			//echo "hello";
			//echo "inRetrieve";
			$table = "";
			
			
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
		
			
			$tablelen = strlen($table);
			$variable = "";
			$rowlength = 30;
			$rowposition = 0;
			for($i = $rowlength; $i <$tablelen - $rowlength; $i++)
			{
				if($rowposition == 0)
				{
					$rowposition++;
				}
				else if($rowposition == ($rowlength - 1))
				{
					$rowposition = 0;
				}
				else
				{
					$rowposition++;
					$variable .= $table{$i};
				}
			}
	

		        echo $variable;
			
			
			$conn->close();

		        echo $variable;
			
			
			$conn->close();
		?>