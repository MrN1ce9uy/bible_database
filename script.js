// Function to fetch and display content based on the selected book
function showBook(str) {
	if (str == "") {
		document.getElementById("content").innerHTML = "";
		return;
	}
	var xhttp = new XMLHttpRequest();
	xhttp.onload = function() {
		document.getElementById("content").innerHTML = this.responseText;
	}
				xhttp.open("GET", "book.php?q="+str);
	xhttp.send();
}
// Function to fetch and display search results based on the search input
function getSearchResults() {
    var str = document.getElementsByName("search")[0].value;
    if (str == "") {
        document.getElementById("content").innerHTML = "";
        return;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("content").innerHTML = this.responseText;
    }
    xhttp.open("GET", "search.php?search="+str);
    xhttp.send();
}
// Add an event listener to the search form submission
document.getElementById("searchForm").addEventListener("submit", function(event) {
	event.preventDefault(); // Prevent the default form submission
	getSearchResults(); // Call the getSearchResults() function to get the search results
});