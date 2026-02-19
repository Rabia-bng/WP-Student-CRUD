<?php
include "dbconnect.php";
include "session.php";

if(isset($_POST['submit'])){

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students(name,email,course)
            VALUES('$name','$email','$course')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Insert failed: " . mysqli_error($conn));
    }

    $_SESSION['message'] = "Student added successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: students.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
html, body { height: 100%; }
body { display: flex; flex-direction: column; }
.main-content { flex: 1; }
</style>

</head>
<body>

<?php include "navbar.php"; ?>

<div class="main-content">

<div class="container mt-5">
    <h2>Add Student</h2>

    <a href="students.php" class="btn btn-secondary mb-3">? Back</a>

    <form method="POST">

        <input type="text" 
               name="name" 
               class="form-control mb-2" 
               placeholder="Name" 
               required>

        <input type="email" 
               name="email" 
               class="form-control mb-2" 
               placeholder="Email" 
               required>

        <input type="text" 
               name="course" 
               class="form-control mb-3" 
               placeholder="Course" 
               required>

        <button name="submit" class="btn btn-success">Save</button>

    </form>

</div>

</div>

<?php include "footer.php"; ?>

</body>
</html>
