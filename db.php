<?php

$host="localhost";
$user="root";
$password="admin";
$db="yazhii_test";

$conn = new mysqli($host, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$uname=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT id FROM user  where user_name='".$uname."'AND password='".$password."'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo  "successfully logged in";
    exit();
}
else{
    // echo "Login failed. Please try again" ;
    echo '<script>alert("Login failed. Please try again")</script>';
    exit();
}
?>
