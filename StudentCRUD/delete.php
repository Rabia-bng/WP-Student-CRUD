<?php

include "dbconnect.php";
include "session.php";

if(!isset($_GET['id'])){
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM students WHERE id=$id");


$_SESSION['message'] = "Student deleted successfully!";
$_SESSION['msg_type'] = "success";

header("Location: students.php");
exit();

