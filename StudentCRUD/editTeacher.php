<?php

include "dbconnect.php";
include "session.php";

if(!isset($_GET['id'])){
    header("Location: teachers.php");
    exit();
}

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM teachers WHERE id='$id'");
if(mysqli_num_rows($query) == 0){
    $_SESSION['message'] = "Teacher not found!";
    $_SESSION['msg_type'] = "danger";
    header("Location: teachers.php");
    exit();
}
$teacher = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];

    mysqli_query($conn, "UPDATE teachers SET 
        name='$name', email='$email', phone='$phone', department='$department' 
        WHERE id='$id'");

    $_SESSION['message'] = "Teacher updated successfully!";
    $_SESSION['msg_type'] = "success";
    header("Location: teachers.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    html, body { height:100%; }
    body { display:flex; flex-direction:column; }
    .main-content { flex:1; }
    </style>
</head>
<body>

<?php include "navbar.php"; ?>

<div class="main-content">
<div class="container mt-5">

    <h2 class="mb-4">Edit Teacher</h2>

    <div class="mb-3 text-start">
        <a href="teachers.php" class="btn btn-secondary">&larr; Back to Teachers</a>
    </div>

    <form method="POST">
        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required value="<?= $teacher['name'] ?>">
        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required value="<?= $teacher['email'] ?>">
        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" value="<?= $teacher['phone'] ?>">
        <input type="text" name="department" class="form-control mb-3" placeholder="Department" value="<?= $teacher['department'] ?>">
        <button name="update" class="btn btn-success">Update Teacher</button>
    </form>

</div>
</div>

<?php include "footer.php"; ?>

</body>
</html>
