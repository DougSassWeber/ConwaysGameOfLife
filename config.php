<html>
	<body>
		<p>
		<?php
			$servername = "localhost";
			$username = "W01230747";
			$password = "Mikaellecs!";
			$dbname = "W01230747";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 


		?>
		</p>
	</body>
</html>