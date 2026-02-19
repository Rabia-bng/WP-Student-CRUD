<?php
include "dbconnect.php";
include "session.php";

$studentQuery = mysqli_query($conn, "SELECT COUNT(*) AS total_students FROM students");
$studentData = mysqli_fetch_assoc($studentQuery);
$totalStudents = $studentData['total_students'];

$teacherQuery = mysqli_query($conn, "SELECT COUNT(*) AS total_teachers FROM teachers");
$teacherData = mysqli_fetch_assoc($teacherQuery);
$totalTeachers = $teacherData['total_teachers'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
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
<div class="container mt-4">

    <h2 class="text-center mb-4">Dashboard</h2>

    <!--Cards-->
    <div class="row">

        <!--Total Students-->
        <div class="col-md-6 mb-3">
            <div class="card shadow text-center bg-primary text-white">
                <div class="card-body">
                    <h5>Total Students</h5>
                    <h1><?= $totalStudents ?></h1>
                </div>
            </div>
        </div>

        <!--Total Teachers-->
        <div class="col-md-6 mb-3">
            <div class="card shadow text-center bg-success text-white">
                <div class="card-body">
                    <h5>Total Teachers</h5>
                    <h1><?= $totalTeachers ?></h1>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

<?php include "footer.php"; ?>

</body>
</html>
