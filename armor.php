<?php
	// Get contents from external file.
    require_once '/var/www/private/auth/login.php';
	
	// Set up a connection to the MySQL database.
    $conn = new mysqli($hn, $un, $pw, $db);
	
	// Check connection.
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	// MySQL query
	echo "Armor of God";
	$query = "SELECT t_kjv.b, t_kjv.c, t_kjv.v, t_kjv.t, key_english.n FROM t_kjv LEFT JOIN key_english ON t_kjv.b = key_english.b WHERE t_kjv.b = 49 and t_kjv.c = 6 and t_kjv.v BETWEEN 10 AND 20";
	//break;
	
	// Execute the selected query.
	$result = $conn->query($query);
	
	// Display the result on a webpage.
	if ($result->num_rows > 0) {
		echo "<table><tr><th></th><th></th><th></th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["n"]."</td><td>".$row["c"].":".$row["v"]."</td><td>".$row["t"]."</td></tr>";
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