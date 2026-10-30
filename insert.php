
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
                        <h3>Registration Form</h3>
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
                                       required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email"
                                       class="form-control"
                                       placeholder="Enter email"
                                       name="email"
                                       required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password"
                                       class="form-control"
                                       placeholder="Enter password"
                                       name="password"
                                       required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="sub">
                                    Register
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
   $email = $_POST['email'];
   $pass = $_POST['password'];

   $a = "INSERT INTO users(username, email_id, upassword)
   values('$username', '$email', '$pass')
   ";
   $b = mysqli_query($conn,$a);
   if($b){
    echo "<script>
    alert('User Registed!!')
    </script>";
   }
   else{
    echo "<script>
    alert('User can't registered!!')
    </script>";
   }
}

?>