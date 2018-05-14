<?php
// PHP code to check whether the time is even or odd 

function check($time){
    if($time % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
 
// Driver Code
$time = 23;
check($time)
?>