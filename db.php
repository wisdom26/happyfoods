<?php 
$Name = $_POST['name'];
$username = $_POST['username'];
// $email = $_POST['email'];
$password = $_POST['pass'];
$mobile = $_POST['mobile'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'food');
if ($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(Name, username, password, mobile) values(?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$Name, $username,$password, $mobile);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>

