<?php

include "dbconnect.php";
include "session.php";

if(!isset($_GET['id'])){
    $_SESSION['message'] = "No teacher specified!";
    $_SESSION['msg_type'] = "danger";
    header("Location: teachers.php");
    exit();
}

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM teachers WHERE id=$id");

$_SESSION['message'] = "Teacher deleted successfully!";
$_SESSION['msg_type'] = "success";

header("Location: teachers.php");
exit();

