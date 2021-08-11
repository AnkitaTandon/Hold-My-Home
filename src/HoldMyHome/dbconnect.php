<?php

$conn=mysqli_connect('localhost','root','','HoldMyHome');

//check
if(!$conn){
    echo 'Connection Error: '.mysqli_connect_error();
}

?>
