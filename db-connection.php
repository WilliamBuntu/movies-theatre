<?php

$conn= new mysqli("localhost","root","","cinema");

if(!$conn){
    echo "DB connection failed".mysqli_error($conn);
}
?>