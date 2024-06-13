<?php



$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_project";

$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error) {
    die("Connection Failed" .$connection->connect_error);
}

$login_username   = filter_input(INPUT_POST, "username");
$login_password   = filter_input(INPUT_POST, "password");

$sql= "select * from login";
$result = $connection->query($sql);
$successful=false;

while($row = $result->fetch_assoc()) {
    if($row["username"] == $login_username && $row["password"]==$login_password){
        $successful=true;}
    }
    if($successful==true){
        echo "Welcome";}
        else{
            echo "Try again";}