<?php
$con=mysqli_connect('localhost', 'root', 'toor');
if($con){
    echo "Connection successful";
}

mysqli_select_db($con, 'website_project');

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="insert into contacts(first_name, last_name, phone, email, subject, message)
values('$first_name', '$last_name', '$phone', '$email', '$subject', '$message')";
mysqli_query($con,$query);
header("location:contacts.php");
?>
