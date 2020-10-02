<?php
include 'connection/connection.php';
$hashed_pass=md5($_POST['password']);
$sql = "INSERT INTO information (username,email, mobile, password)
VALUES ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$hashed_pass."')";

if ($conn->query($sql) === TRUE) {
$newURL="sign.php";
header('Location: '.$newURL);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>