<?php
			$servername = "localhost";
			$username = "root";
			$password = "Group4!2017";
			$dbname = "Group4";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 


		?>