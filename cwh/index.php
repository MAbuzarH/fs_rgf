<?php
$insert = false;
if(isset( $_POST['name'])){
// make connection with sql
$server = 'localhost';
$username = 'root';
$pasword = "";
$db = 'trip';

$con = mysqli_connect($server, $username, $pasword ,$db);
if ($con === false) {
    // die("connect to this data base  failed due to " . mysqli_connect_error());
} else {
    echo "connected to server";
}
//insert data into database

$name = $_POST  ["name"];
$age = $_POST  ["age"];
$gender = $_POST  ["gender"];
$email = $_POST  ["email"];
$phone = $_POST  ["phone"];
$desc = $_POST  ["desc"];
// $name = "name";
// $age = "age";
// $gender = "gender";
// $email = "email";
// $phone = "phone";
// $desc = "desc";

$sql = "INSERT INTO trip (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
$result = mysqli_query($con,$sql);
// print_r($sql);
if ($result) {
    echo "success fully inserted";
    $insert = true;
} else {
    echo "Error: $sql <br/>  $con->error";
}
$con->close();
} 
?>
