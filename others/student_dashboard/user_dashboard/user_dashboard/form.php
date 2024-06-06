<?php
include 'config.php';
if(isset($_POST['submit'])){

    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $exname = $_POST["exname"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $address = $_POST["Address"];
    $mother_name = $_POST["namemparent"];
    $mother_number = $_POST["parentmnumber"];
    $father_name = $_POST["namefparent"];
    $father_number = $_POST["parentfnumber"];
    $grade_level = $_POST["grade_level"];
    $sql = "INSERT INTO user_data (lname, fname, mname, exname, birthdate, gender, number, email, address, mother_name, mother_number, father_name, father_number, grade_level) VALUES ('$lname', '$fname', '$mname', '$exname', '$birthdate', '$gender', '$number', '$email', '$address', '$mother_name', '$mother_number', '$father_name', '$father_number', '$grade_level')";
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
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <div class="container">
        <form action="process_form.php" method="post" class="form">
            <br>
            <br>
            <center>
                <h1>Enrollment Form</h1>
            </center>
            <br>
            <br>
            <table>
                <tr>
                    <td><label>Full name:</label></td>
                    <td><input type="text" class="holder" name="lname" placeholder="Last Name"></td>
                    <td><input type="text" class="holder" name="fname" placeholder="First Name"></td>
                    <td><input type="text" class="holder" name="mname" placeholder="Middle Name(optional)"></td>
                    <td><input type="text" class="holder" name="exname" placeholder="Name Extension"></td>
                </tr>
                <tr>
                    <td><label for="date">Birthdate:</label></td>
                    <td><input type="date" class="holder" name="birthdate" placeholder="Birthdate"></td>
                    <td><label>Gender:</label><label for="male">male</label></td>
                    <td><input type="radio" name="gender" value="male"></td>
                    <td><label>Female</label></td>
                    <td><input type="radio" name="gender" value="female"></td>
                </tr>
                <tr>
                    <td><label for="number">Phone Number:</label></td>
                    <td><input type="text" class="holder" name="number" placeholder="Mobile Number"></td>
                    <td><label>Email Address:</label></td>
                    <td><input type="text" class="holder" name="email" placeholder="Email"> </td>
                </tr>
                <tr>
                    <td><label>Full Address:</label></td>
                    <td><input type="text" class="holder" name="Address" placeholder="Address"></td>
                </tr>
                <tr>
                    <td><label>Name of the Mother:</label></td>
                    <td><input type="text" class="holder" name="mother_name" placeholder="Fullname"></td>
                    <td><label for="parentnumber">Phone Number:</label></td>
                    <td><input type="text" class="holder" name="mother_number" placeholder="Mobile Number"></td>
                </tr>
                <tr>
                    <td><label>Name of the Father:</label></td>
                    <td><input type="text" class="holder" name="father_name" placeholder="Fullname"></td>
                    <td><label for="parentnumber">Phone Number:</label></td>
                    <td><input type="text" class="holder" name="father_number" placeholder="Mobile Number"></td>
                </tr>
                <tr>
                    <td><label>Grade level:</label></td>
                    <td>
                        <select name="grade_level">
                            <option value="Preschool">Preschool</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="grade-11ABM">11ABM</option>
                            <option value="grade-11STEM">11STEM</option>
                            <option value="grade-11HUMSS">11HUMSS</option>
                            <option value="grade-11GAS">11GAS</option>
                            <option value="grade-11ICT">11ICT</option>
                            <option value="grade-11H&M">11H&M</option>
                            <option value="grade-12ABM">12ABM</option>
                            <option value="grade-12STEM">12STEM</option>
                            <option value="grade-12HUMSS">12HUMSS</option>
                            <option value="grade-12GAS">12GAS</option>
                            <option value="grade-12ICT">12ICT</option>
                            <option value="grade-12H&M">12H&M</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>
