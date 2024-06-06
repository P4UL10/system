<?php
// Include database connection
include 'comnfig.php';

// Fetch courses from the database
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Courses Management</h2>";
    echo "<table>";
    echo "<tr><th>Course ID</th><th>Course Name</th><th>Instructor</th></tr>";
    // Output data of each course
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["course_id"] . "</td>";
        echo "<td>" . $row["course_name"] . "</td>";
        echo "<td>" . $row["instructor"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No courses found";
}


mysqli_close($conn);
?>
