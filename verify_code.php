<?php
include 'connection/connection.php';
session_start();
//put the username session in the username

$username = $_SESSION["username"];
//put time in variable
$date = new DateTime();
$t= $date->getTimestamp();
$code=md5($_POST['code']);
$sql = "Select * from information where username = '".$username."' and code = '".$code."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $current_time=$row["timee"] ;
        if($t-$current_time<60){
	   $newURL="index1.php";
        header('Location: '.$newURL);}
        else{
            echo "time expired";
        }
    } 
}else {
    echo "wrong code";
}


$conn->close();





?>