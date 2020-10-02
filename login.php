<?php
include 'connection/connection.php';
session_start();
$pass=md5($_POST['password']);
$sql = "Select * from information where username = '".$_POST['username']."' and password = '".$pass."'";

$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
	$_SESSION["userID"] =$row["id"] ;
	$_SESSION["username"]=$row["username"];
	$_SESSION["email"]=$row["email"];

    //update code and time
$date = new DateTime();
$t= $date->getTimestamp();
$code=rand(0,999999);

$to =$_SESSION["email"];
$subject = "Code security";
$txt = "Temporary Code to login to our website for user ".$_SESSION["username"].":\n\n ".$code;
$headers = "From: security@teamgin.com";

mail($to,$subject,$txt,$headers);

$code_hash=md5($code);
$sql2 = "UPDATE information SET code='".$code_hash."',timee=".$t." WHERE id='".$_SESSION["userID"]."'";


if ($conn->query($sql2) === TRUE) {
    $newURL="step2.php";
    header('Location: '.$newURL);
} else {
    echo "Error updating Code: " . $conn->error;
}
	
    } 
}else {
    echo "wrong password";
}


$conn->close();





?>