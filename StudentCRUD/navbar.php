<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

    <a class="navbar-brand" href="dashboard.php">Student Management System</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

        <!-- Left menu -->
        <ul class="navbar-nav me-auto">

            <li class="nav-item">
                <a class="nav-link" href="students.php">Manage Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="teachers.php">Manage Teachers</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="create.php">Add Student</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="createteacher.php">Add Teacher</a>
            </li>

        </ul>

        <!-- Right side -->
        <span class="navbar-text me-3">
            Welcome, <?= $_SESSION['username'] ?? '' ?>
        </span>

        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

    </div>

</div>
</nav>
