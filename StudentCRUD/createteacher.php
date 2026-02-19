<?php
include "dbconnect.php";
include "session.php";


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO teachers(name,email,subject)
            VALUES('$name','$email','$subject')";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Insert failed: " . mysqli_error($conn));
    }

    $_SESSION['message'] = "Teacher added successfully!";
    $_SESSION['msg_type'] = "success";

    header("Location: teachers.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Teacher</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include "navbar.php"; ?>

<div class="container mt-5">
    <h2>Add Teacher</h2>

    <a href="teachers.php" class="btn btn-secondary mb-3">? Back</a>

    <form method="POST">

        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>

        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

        <input type="text" name="subject" class="form-control mb-3" placeholder="Subject" required>

        <button name="submit" class="btn btn-success">Save</button>

    </form>
</div>

<?php include "footer.php"; ?>

</body>
</html>
