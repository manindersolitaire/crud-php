<?php 
include "./connect.php";
/*
include
require
*/
$a = "CREATE DATABASE crud2k";
$b = mysqli_query($conn, $a);
if($b){
    echo "DB Created!!";
}
else{
    echo mysqli_error($conn);
}




?>