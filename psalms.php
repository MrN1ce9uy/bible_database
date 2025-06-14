<?php
	// Get contents from external file.
    require_once '/var/www/private/auth/login.php';
	
	// Set up a connection to the MySQL database.
    $conn = new mysqli($hn, $un, $pw, $db);
	
	// Check connection.
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Get the current day of the month.
	$day = date('j');
	
	// Select a MySQL query based on the day of the month.
	switch ($day) {
		case 1:
			echo "Psalm 1";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 1";
			break;
		
		case 2:
			echo "Psalm 2";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 2";
			break;
		
		case 3:
			echo "Psalm 3";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 3";
			break;		
			
		case 4:
			echo "Psalm 4";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 4";
			break;
			
		case 5:
			echo "Psalm 5";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 5";
			break;
			
		case 6:
			echo "Psalm 6";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 6";
			break;
			
		case 7:
			echo "Psalm 7";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 7";
			break;
			
		case 8:
			echo "Psalm 8";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 8";
			break;
			
		case 9:
			echo "Psalm 9";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 9";
			break;
			
		case 10:
			echo "Psalm 10";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 10";
			break;
			
		case 11:
			echo "Psalm 11";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 11";
			break;
			
		case 12:
			echo "Psalm 12";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 12";
			break;
			
		case 13:
			echo "Psalm 13";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 13";
			break;
			
		case 14:
			echo "Psalm 14";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 14";
			break;
			
		case 15:
			echo "Psalm 15";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 15";
			break;
			
		case 16:
			echo "Psalm 16";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 16";
			break;
			
		case 17:
			echo "Psalm 17";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 17";
			break;
			
		case 18:
			echo "Psalm 18";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 18";
			break;
			
		case 19:
			echo "Psalm 19";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 19";
			break;
			
		case 20:
			echo "Psalm 20";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 20";
			break;
			
		case 21:
			echo "Psalm 21";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 21";
			break;
			
		case 22:
			echo "Psalm 22";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 22";
			break;
			
		case 23:
			echo "Psalm 23";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 23";
			break;
			
		case 24:
			echo "Psalm 24";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 24";
			break;
			
		case 25:
			echo "Psalm 25";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 25";
			break;
			
		case 26:
			echo "Psalm 26";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 26";
			break;
			
		case 27:
			echo "Psalm 27";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 27";
			break;
			
		case 28:
			echo "Psalm 28";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 28";
			break;
			
		case 29:
			echo "Psalm 29";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 29";
			break;
			
		case 30:
			echo "Psalm 30";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 30";
			break;
			
		case 31:
			echo "Psalm 31";
			$query = "SELECT v,t FROM t_kjv WHERE b = 19 and c = 31";
			break;
		
		default:
			$query = "SELECT v,t FROM t_kjv WHERE b=19";
	}
	
	// Execute the selected query.
	$result = $conn->query($query);
	
	// Display the result on a webpage.
	if ($result->num_rows > 0) {
		echo "<table><tr><th></th><th></th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["v"]."</td><td>".$row["t"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	
	// Close the MySQL query.
	$result->close();
	
	// Close the MySQL connection.
    $conn->close();
?>