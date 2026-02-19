<?php
session_start();
include "dbconnect.php";

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit();
}

$error = "";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if(!$query){
    die("Query Failed: " . mysqli_error($conn));
}
    if(mysqli_num_rows($query) > 0){
        $_SESSION['username'] = $username;
        $_SESSION['message'] = "Welcome, $username!";
        $_SESSION['msg_type'] = "success";

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #667eea, #764ba2);
            font-family: 'Segoe UI', sans-serif;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: #ded8d8;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            margin-bottom: 1.5rem;
            color: #141313;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            border-radius: 8px;
        }

        .alert {
            border-radius: 8px;
        }

        .logo {
            text-align: center;
            margin-bottom: 1rem;
            font-weight: bold;
            font-size: 1.5rem;
            color: #667eea;
        }

    </style>
</head>

<body>

<div class="main-content">

    <div class="login-card">

        <div class="logo">Student Management System</div>

        <?php if($error): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $error ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>
            <button name="login" class="btn btn-primary w-50">Login</button>
        </form>

    </div>

</div>

<?php include "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
