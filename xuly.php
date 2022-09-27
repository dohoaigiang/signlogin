<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'login');
$sql = "SELECT * FROM dulieu WHERE username = '$username'";
$result = $conn->query($sql)->fetch_assoc();

if($result['password'] == $password){
    echo'dang nhap dung thong tin';
}
else{
    echo'dang nhap sai thong tin';
}
$conn->close();
?>