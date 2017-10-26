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
			
			$tablelen = strlen($table);
			$variable = "";
			for ( $i = 0; $i < $tablelen; $i++)
			{
				switch ($i)
				{
					case 0: 
					case 1:
					case 2:
					case 3: 
					case 4:
					case 5:
					case 6:
					case 7: 
					case 8: 
					case 9:
					case 10: 
					case 11:
					
					case 12: 
					case 23:
					case 24:
					case 25:
					case 36:
					case 47:
					case 48:  
					case 59:
					case 60: 
					case 71:
					case 72: 
					case 83:
					case 84:
					case 95:
					case 96:
					case 107:
					case 108:
					case 119:
					case 120: 
					case 131:
					case 132: 
					case 133: 
					case 134: 
					case 135: 
					case 136: 
					case 137: 
					case 138: 
					case 139: 
					case 140: 
					case 141: 
					case 142:
					case 143:						
					break;
					default:
					$variable .= $table{$i};
				}
				
			}

		        echo $variable;
			
			
			$conn->close();
		?>
		
	</body>
</html>