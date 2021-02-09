<?php
session_start();

$email = $_POST['email'];
$phone = $_POST['phonenumber'];
$address = $_POST['address'];
$name = $_POST['name'];
$form_number = uniqid();

// connecting sql data base
$db = mysqli_connect('localhost', 'root','', 'practice') or die("unable to connect database");

$query = "INSERT INTO user (form_number, name, address, email, phone) VALUES ('$form_number', '$name', '$address', '$email', '$phone')";

if(mysqli_query($db, $query)) {	
    echo "Sucessfully Inserted!!!"
} else {
    echo "Failed to Insert Data";
}
$db -> close();
?>