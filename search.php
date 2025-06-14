<?php
// Get contents from external file
require_once '/var/www/private/auth/login.php';

// Set up a connection to the MySQL database
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_GET['search'])) {
	
	// Get the search query from the form
	$search = $_GET['search'];

	// Prepare the SQL statement with a placeholder for the search parameter
	// $sql = "SELECT t_kjv.b, t_kjv.c, t_kjv.v, t_kjv.t, key_english.n FROM t_kjv LEFT JOIN key_english ON t_kjv.b = key_english.b WHERE t_kjv.t LIKE ?";
	$sql = "SELECT t_kjv.b, t_kjv.c, t_kjv.v, t_kjv.t, key_english.n FROM t_kjv LEFT JOIN key_english ON t_kjv.b = key_english.b WHERE t_kjv.t REGEXP '\\?\\b'";
	$stmt = $conn->prepare($sql);

	// Bind the form parameter to the statement
	$searchParam = "%$search%";
	$stmt->bind_param("s", $searchParam);

	// Execute the statement
	$stmt->execute();
	$result = $stmt->get_result();

	// Display the results
	if ($result->num_rows > 0) {
		echo "<table><tr><th></th><th></th><th></th></tr>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["n"]."</td><td>".$row["c"].":".$row["v"]."</td><td>".$row["t"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	// Close the MySQL statement.
	$stmt->close();
} else {
	echo "Please enter a search query.";
}

// Close the MySQL connection.
$conn->close();

echo "<br><br>King James Version (KJV)";
?>
