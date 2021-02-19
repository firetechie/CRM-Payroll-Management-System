<?php
	$conn = new mysqli('localhost', 'root', '', 'crm');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>