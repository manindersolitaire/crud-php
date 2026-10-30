<?php
include "./connect.php";

$a = "CREATE TABLE users(
    sno INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email_id VARCHAR(100),
    upassword VARCHAR(20) 

)";
$b = mysqli_query($conn,$a);
if($b){
    echo "TABLE CREATED!!";
}
else{
    echo mysqli_error($conn);
}

?>