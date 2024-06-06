<?php
include '../interface/config.php';
include '../interface/function.php';
if(isset($_POST['submit'])){

    $lname = $_POST["last_name"];
    $fname = $_POST["first_name"];
    $mname = $_POST["middle_name"];
    $exname = $_POST["extension_name"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["Address"];
    $mother_name = $_POST["mothers_name"];
    $mother_number = $_POST["mothers_number"];
    $father_name = $_POST["fathers_name"];
    $father_number = $_POST["father_number"];
    $grade_level = $_POST["grade_level"];
    $sql = "INSERT INTO user_data (last_name, first_name, middle_name, extension_name, birthdate, gender, number, email, address, mothers_name, mothers_number, fathers_name, fathers_number, grade_level) VALUES ('$lname', '$fname', '$mname', '$exname', '$birthdate', '$gender', '$number', '$email', '$address', '$mother_name', '$mother_number', '$father_name', '$father_number', '$grade_level')";
    mysqli_query($conn,$sql);
    header ('location:dashboard_user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-school Form</title>
    <link rel="stylesheet" href="user.css">
</head>
<style>
    body{
        background:linear-gradient(to right,rgb(231,253,194),rgb(129,173,244));
    }
    .container{
        width:80%;
        margin:60px;
        height: 550px;
    }

    </style>

<body>
    <br>
    
    <a href="dashboard_user.php" class="back">Back</a>
                        <div class="container">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
                                <center>
                        <h1>Enrollment Form</h1>
                    </center>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <td><label>PSA(Birthcertificate)</label></td>
                            <td><input type="file" class="inside" name="last_name" placeholder="Last Name" required></td>
                        </tr>
                        <tr>
                            <td><label for="date">Previous I.D:</label></td>
                            <td><input type="file" class="inside" name="previous_id"required></td>
                          </tr>
                        <tr>
                            <td><label for="number">Form 138 (Report Card)</label></td>
                            <td><input type="file" class="inside" name="report_card"required></td>
                        </tr>
                        <tr>
                     
                                <input class="submit" type="submit" value="submit">
                            </form>
                        </div>
                    </div>
</body>

</html>
