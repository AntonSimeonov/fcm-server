<?php

require "init.php";

$fcm_token = $_POST["fcm_token"];
echo "fcm token value is: ",$fcm_token;
if(empty($fcm_token)){
  echo "fcm_token is empty";
}else{
$sql = "insert into fcm_token values('".$fcm_token."');";
mysqli_query($conn, $sql);
mysqli_close($conn);
}
?>
