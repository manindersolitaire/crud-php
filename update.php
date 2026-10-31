<?php 
include "./connect.php";
$id = $_GET['id'];
// echo $id;
$a = "SELECT * FROM users where sno = $id";
$b = mysqli_query($conn, $a);
$r = mysqli_fetch_assoc($b);
$username =  $r['username'];
$email =  $r['email_id'];
$pass =  $r['upassword'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Update Form</h3>
                    </div>

                    <div class="card-body">

                        <form method="post">

                            <!-- Username -->
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Enter username"
                                       name="username"
                                       value="<?php echo $username; ?>"
                                       required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email"
                                       class="form-control"
                                       placeholder="Enter email"
                                       name="email"
                                       value="<?php echo $email; ?>"
                                       readonly
                                       required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password"
                                       class="form-control"
                                       placeholder="Enter password"
                                       name="password"
                                       value="<?php echo $pass; ?>"
                                       required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="sub">
                                    Save
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>

<?php 
include "./connect.php";

if(isset($_POST['sub'])){
   $username = $_POST['username'];
//    $email = $_POST['email'];
   $pass = $_POST['password'];

   $a = "UPDATE users set username = '$username', upassword = '$pass' where sno = $id";
   $b = mysqli_query($conn,$a);
   if($b){
    echo "<script>
    alert('User Updated!!');
    window.location.href = 'read.php';
    </script>";
   }
   else{
    echo "<script>
    alert('User can't updated!!')
    </script>";
   }
}

?>