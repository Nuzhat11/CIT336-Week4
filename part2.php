<?php
$link = mysqli_connect("localhost", "root", "root", "demo");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Thie is comment section 1
$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} 
//Thie is comment section 2 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//Thie is comment section 3
mysqli_close($link);
//Thie is comment section 4
?>
