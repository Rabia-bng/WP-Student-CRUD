
<?php

include "dbconnect.php";
include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Management - Student Management System</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <style>
    html, body {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .main-content {
        flex: 1;
    }
    </style>

</head>

<body>

<?php include "navbar.php"; ?>


<div class="main-content">

<div class="container mt-3 position-relative">

    
    <h2 class="mb-4 text-center">Teacher History</h2>
    
    <div class="card shadow-sm bg-info text-dark">
        <div class="card-body p-0">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM teachers ORDER BY id DESC");
                while($row = mysqli_fetch_assoc($result)):
                ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['department'] ?></td>
                        <td>
                            <a href="editTeacher.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="deleteTeacher.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" 
                               onclick="return confirm('Are you sure you want to delete this teacher?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php include "footer.php"; ?>

</body>
</html>

