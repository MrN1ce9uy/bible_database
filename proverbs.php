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
			echo "Proverbs 1";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 1";
			break;
		
		case 2:
			echo "Proverbs 2";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 2";
			break;
		
		case 3:
			echo "Proverbs 3";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 3";
			break;		
			
		case 4:
			echo "Proverbs 4";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 4";
			break;
			
		case 5:
			echo "Proverbs 5";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 5";
			break;
			
		case 6:
			echo "Proverbs 6";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 6";
			break;
			
		case 7:
			echo "Proverbs 7";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 7";
			break;
			
		case 8:
			echo "Proverbs 8";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 8";
			break;
			
		case 9:
			echo "Proverbs 9";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 9";
			break;
			
		case 10:
			echo "Proverbs 10";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 10";
			break;
			
		case 11:
			echo "Proverbs 11";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 11";
			break;
			
		case 12:
			echo "Proverbs 12";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 12";
			break;
			
		case 13:
			echo "Proverbs 13";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 13";
			break;
			
		case 14:
			echo "Proverbs 14";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 14";
			break;
			
		case 15:
			echo "Proverbs 15";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 15";
			break;
			
		case 16:
			echo "Proverbs 16";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 16";
			break;
			
		case 17:
			echo "Proverbs 17";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 17";
			break;
			
		case 18:
			echo "Proverbs 18";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 18";
			break;
			
		case 19:
			echo "Proverbs 19";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 19";
			break;
			
		case 20:
			echo "Proverbs 20";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 20";
			break;
			
		case 21:
			echo "Proverbs 21";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 21";
			break;
			
		case 22:
			echo "Proverbs 22";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 22";
			break;
			
		case 23:
			echo "Proverbs 23";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 23";
			break;
			
		case 24:
			echo "Proverbs 24";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 24";
			break;
			
		case 25:
			echo "Proverbs 25";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 25";
			break;
			
		case 26:
			echo "Proverbs 26";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 26";
			break;
			
		case 27:
			echo "Proverbs 27";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 27";
			break;
			
		case 28:
			echo "Proverbs 28";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 28";
			break;
			
		case 29:
			echo "Proverbs 29";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 29";
			break;
			
		case 30:
			echo "Proverbs 30";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 30";
			break;
			
		case 31:
			echo "Proverbs 31";
			$query = "SELECT v,t FROM t_kjv WHERE b = 20 and c = 31";
			break;
		
		default:
			$query = "SELECT v,t FROM t_kjv WHERE b=20";
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