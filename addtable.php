<?php

$link = mysqli_connect("localhost", "root", "root", "Friends");
	 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

// attempt insert query execution
$sql = "INSERT INTO Info (first_name, last_name, email) VALUES ('Briana', 'Morris', 'bmglitters@gmail.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
	mysqli_close($link);
	?>
