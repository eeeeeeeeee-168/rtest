<?php

$conn = mysqli_connect("localhost","root","","school");

if(!$conn){
    die("Connection Failed");
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO students(fullname,email,password,gender,address)
VALUES('$fullname','$email','$password','$gender','$address')";

if(mysqli_query($conn,$sql)){
    echo "Data Saved Successfully";
}else{
    echo "Error";
}

?>