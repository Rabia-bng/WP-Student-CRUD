<?php

include "dbconnect.php";
include "session.php";

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $teacher = $_POST['Teacher'];

    mysqli_query($conn, "UPDATE students SET
        name='$name',
        email='$email',
        phone='$phone',
        address='$address',
        Teacher='$teacher'
        WHERE id=$id"
    );

    
    $_SESSION['message'] = "Student updated successfully!";
    $_SESSION['msg_type'] = "warning"; 
    header("Location: students.php");
    exit(); t
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
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

<div class="container mt-5">
<h2>Edit Student</h2>
    <div class="mb-3 text-start">
        <a href="students.php" class="btn btn-secondary">&larr; Back</a>
    </div>

<form method="POST">
    <input type="text" name="name" class="form-control mb-2" value="<?= $data['name'] ?>" placeholder="Name" required>
    <input type="email" name="email" class="form-control mb-2" value="<?= $data['email'] ?>" placeholder="Email" required>
    <input type="text" name="phone" class="form-control mb-2" value="<?= $data['phone'] ?>" placeholder="Phone" required>
    <input type="text" name="address" class="form-control mb-2" value="<?= $data['address'] ?>" placeholder="Address" required>
    <input type="text" name="Teacher" class="form-control mb-2" value="<?= $data['Teacher'] ?>" placeholder="Supervisor" required>

    <button name="update" class="btn btn-warning">Update</button>
    <a href="students.php" class="btn btn-secondary">Cancel</a>
</form>
</div>
<?php include "footer.php"; ?>
</body>
</html>

