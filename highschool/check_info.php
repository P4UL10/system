<?php 
include '../interface/config.php';
include '../interface/function.php';

$disableSubmit = true; 
session_start();

$_SESSION['disable_submit'] = $disableSubmit;

if(isset($_POST['submit'])){
    $lname = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $fname = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $mname = mysqli_real_escape_string($conn, $_POST["middle_name"]);
    $exname = mysqli_real_escape_string($conn, $_POST["extension_name"]);
    $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $mother_name = mysqli_real_escape_string($conn, $_POST["mothers_name"]);
    $mother_number = mysqli_real_escape_string($conn, $_POST["mothers_number"]);
    $father_name = mysqli_real_escape_string($conn, $_POST["fathers_name"]);
    $father_number = mysqli_real_escape_string($conn, $_POST["fathers_number"]);
    $grade_level = mysqli_real_escape_string($conn, $_POST["grade_level"]);



$sql = "INSERT INTO user_data (last_name, first_name, middle_name, extension_name, birthdate, gender, number, email, address, mothers_name, mothers_number, fathers_name, fathers_number, grade_level) VALUES ('$lname', '$fname', '$mname', '$exname', '$birthdate', '$gender', '$number', '$email', '$address', '$mother_name', '$mother_number', '$father_name', '$father_number', '$grade_level')";
    mysqli_query($conn, $sql);

    header ('location:../interface/output.html');
    exit();

}

if(isset($_GET['id'])) {

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM user_data WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Check if there are any rows in the result
    if (mysqli_num_rows($result) > 0) {
        // Output data of the row
        $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form Data</title>
    <style>
        body {
            background: linear-gradient(to right, rgb(231, 253, 194), rgb(129, 173, 244));
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 60px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enrollment Form Data</h1>
        <table>
            <tr>
                <th>Full Name</th>
                <td><?php echo $row["last_name"] . " " . $row["first_name"] . " " . $row["middle_name"] . " " . $row["extension_name"]; ?></td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td><?php echo $row["birthdate"]; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $row["gender"]; ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo $row["number"]; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row["email"]; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row["address"]; ?></td>
            </tr>
            <tr>
                <th>Mother's Name</th>
                <td><?php echo $row["mothers_name"]; ?></td>
            </tr>
            <tr>
                <th>Mother's Number</th>
                <td><?php echo $row["mothers_number"]; ?></td>
            </tr>
            <tr>
                <th>Father's Name</th>
                <td><?php echo $row["fathers_name"]; ?></td>
            </tr>
            <tr>
                <th>Father's Number</th>
                <td><?php echo $row["fathers_number"]; ?></td>
            </tr>
            <tr>
                <th>Grade Level</th>
                <td><?php echo $row["grade_level"]; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
<?php
    } else {
        echo "0 results";
    }
} else {
    echo "User ID not provided";
}

// Close connection
mysqli_close($conn);
?>