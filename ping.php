<?php
if(isset($_POST['ip'])){
$host = $_POST['ip'];
$port = 80; 
$waitTimeoutInSeconds = 1; 

if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
  echo "ok";
} else {
  echo "ko";
} 
fclose($fp);

}
?>