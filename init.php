<?php

$host = "localhost";;
$dbUser = "root";
$dbPassword = "vertrigo540";

$dbName = "fcm_db";

$conn = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

if($conn){
  echo "Connection success ......";
}else{
  echo "Connection error .......";
}
?>
