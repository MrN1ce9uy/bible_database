// Function to load PHP file
document.addEventListener("DOMContentLoaded", function() {
	// Mapping of HTML pages to PHP files
	const pageToPHP = {
		"proverbs.html": "proverbs.php",
		"psalms.html": "psalms.php",
		"armor.html": "armor.php"
	};
	
	// Get the current HTML file name
	let currentPage = window.location.pathname.split("/").pop(); // Extract filename from URL
	
	// Determine the PHP file to load
	let phpFile = pageToPHP[currentPage] || "default.php"; // Default fallback
	
	// Load the table via AJAX
	fetch(phpFile)
		.then(response => response.text())
		.then(data => {
			document.getElementById("content").innerHTML = data;
		})
		.catch(error => console.error("Error loading table:", error));
});