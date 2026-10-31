<?php 
include "./connect.php";

$id = $_GET['id'];

$a = "DELETE FROM users where sno = $id";
$b = mysqli_query($conn, $a);
if($b){
    echo "<script>
    alert('User Deleted!!');
    window.location.href = 'read.php';
    </script>";
   }
   else{
    echo "<script>
    alert('User can't deleted!!')
    </script>";
   }
?>