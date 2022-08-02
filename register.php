<?php
require("db-connection.php");

// if(isset($_REQUEST["register"])){
    
// }
// if(isset($_REQUEST["login"])){

// }

$email=$_POST["email"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$password=password_hash($_POST["password"], PASSWORD_DEFAULT);
$date=date("Y:m:d H:i:s");

$qry="INSERT INTO theatre2(email,fname,lname,password,date) VALUES('$email','$fname','$lname','$password','$date')";

$result=mysqli_query($conn,$qry);

if($result){
    echo "User created";
}else{
    echo "Failed to create user".mysqli_error($conn);
}
?>