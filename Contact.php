<?php
$a = mysqli_connect("localhost","root","","Gym_ws"); //Connecting veriable for backend
$Name = $_POST['Name'];
$address = $_POST['Address'];
$age = $_POST['Age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

$data = "inster into form1(Name,Address,Age,Gender,Mobile)values('$Name','$Address','$Age','$gender','$phone')" ;
mysqli_query($a,$data);



?>