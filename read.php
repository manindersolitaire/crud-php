
<?php

include './connect.php';
$sno = 1;
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <h2 class="text-center mb-4">User Registration System</h2>

        <div class="row">

            <div class="col-md-12">

                <div class="card shadow">

                    <!-- Card Header -->
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">

                        <h4 class="mb-0">Registered Users</h4>

                        <a href="insert.php" class="btn btn-success btn-sm">
                            + Add New User
                        </a>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover">

                                <thead class="table-primary">
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody id="userTable">

                                    <?php

                                    if ($count > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {

                                    ?>

                                            <tr>

                                                <td><?php echo $sno; ?></td>

                                                <td><?php echo htmlspecialchars($row['username']); ?></td>

                                                <td><?php echo htmlspecialchars($row['email_id']); ?></td>

                                                <td>

                                                    <a href="delete.php?id=<?php echo $row['sno']; ?>"
                                                       class="btn btn-danger btn-sm">
                                                        Delete
                                                    </a>

                                                    <a href="update.php?id=<?php echo $row['sno']; ?>"
                                                       class="btn btn-warning btn-sm">
                                                        Edit
                                                    </a>

                                                </td>

                                            </tr>

                                    <?php
                                        $sno++;
                                        }

                                    } else {

                                    ?>

                                        <tr>
                                            <td colspan="4" class="text-center">
                                                No users found!
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>

                            </table>

                        </div>

                        <p class="text-muted mb-0">
                            Total Users: <?php echo $count; ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
