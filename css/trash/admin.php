</--<?php

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// Logout functionality
if (isset($_POST['logout'])) {
    // Unset session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect to login page after logout
    header("Location: login.php");
    exit();
}
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment System Admin Panel</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>

    <nav>
        <ul>
            <li><a href="admin.php?page=dashboard" <?php if($_GET['page'] == 'dashboard') echo 'class="active"'; ?>>Dashboard</a></li>
            <li><a href="admin.php?page=courses" <?php if($_GET['page'] == 'courses') echo 'class="active"'; ?>>Courses</a></li>
            <li><a href="admin.php?page=students" <?php if($_GET['page'] == 'students') echo 'class="active"'; ?>>Students</a></li>
            <li><a href="admin.php?page=enrollments" <?php if($_GET['page'] == 'enrollments') echo 'class="active"'; ?>>Enrollments</a></li>
            <li><a href="admin.php?page=settings" <?php if($_GET['page'] == 'settings') echo 'class="active"'; ?>>Settings</a></li>
            <li style="float:right"><form action="" method="POST"><button type="submit" name="logout">Logout</button></form></li>
        </ul>
    </nav>

    <div class="content fade-in">
        <h1>Welcome to the Enrollment System Admin Panel</h1>
        <?php
            // Include page content based on the 'page' parameter in the URL
            $page = $_GET['page'] ?? 'dashboard';
            include $page . '.php';
        ?>
    </div>

</body>
</html>
