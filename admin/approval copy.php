<?php
include_once 'function_approval';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $insert_query = "INSERT INTO approval (name, email) VALUES ('$name', '$email')";
    $insert_result = mysqli_query($conn, $insert_query);

    if($insert_result) {
        echo "Page submitted successfully.";
    } else {
        echo "Error submitting page.";
    }
}
$result = display_data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Approvals</title>
</head>
<body>
    <h1>Pending Approvals</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Pending Approvals</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>
                        <form method='post'>
                            <input type='hidden' name='user_id' value='" . $row['user_id'] . "'>
                            <button type='submit' name='approve'>Approve</button>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>
