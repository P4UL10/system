<?php
include '../interface/config.php';


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
    $father_number = $_POST["fathers_number"];
    $grade_level = $_POST["grade_level"];
    

    $sql = "INSERT INTO user_data (last_name, first_name, middle_name, extension_name, birthdate, gender, number, email, address, mothers_name, mothers_number, fathers_name, fathers_number, grade_level, status) VALUES ('$lname', '$fname', '$mname', '$exname', '$birthdate', '$gender', '$number', '$email', '$address', '$mother_name', '$mother_number', '$father_name', '$father_number', '$grade_level', 'pending')";
    
    if(mysqli_query($conn, $sql)){
  
        header('Location: ../interface/output.html');
        exit(); 
    } else {
  
        echo "Error: " . mysqli_error($conn);
    }
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
                            <td><label>Full name:</label></td>
                            <td><input type="text" class="inside" name="last_name" placeholder="Last Name" required></td>
                            <td><input type="text" class="inside" name="first_name" placeholder="First Name"required></td>
                            <td><input type="text" class="inside" name="middle_name" placeholder="Middle Name"required></td>
                            <td><input type="text" class="inside" name="extension_name" placeholder="Extension(optional)"></td>
                        </tr>
                        <tr>
                            <td><label for="date">Birthdate:</label></td>
                            <td><input type="date" class="inside" name="birthdate" placeholder="Birthdate"required></td>
                            <td><label>Gender:</label>  
                            <select name="grade_level"required>
                                    <option value="">Male:</option>
                                    <option value="1">Female</option>
                                    </select></td>
                          </tr>
                        <tr>
                            <td><label for="number">Phone Number:</label></td>
                            <td><input type="text" class="inside" name="number" placeholder="Mobile Number"required></td>
                            <td><label>Email Address:</label></td>
                            <td><input type="text" class="inside" name="email" placeholder="Email"require> </td>
                        </tr>
                        <tr>
                            <td><label>Full Address:</label></td>
                            <td><input type="text" class="inside" name="Address" placeholder="Address"require></td>
                        </tr>
                        <tr>
                            <td><label>Name of Mother:</label></td>
                            <td><input type="text" class="inside" name="mothers_name" placeholder="Fullname"></td>
                            <td><label for="parentnumber">Phone Number:</label></td>
                            <td><input type="text" class="inside" name="mothers_number" placeholder="Mobile Number"></td>
                        </tr>
                        <tr>
                            <td><label>Name of Father:</label></td>
                            <td><input type="text" class="inside" name="fathers_name" placeholder="Fullname"></td>
                            <td><label for="parentnumber">Phone Number:</label></td>
                            <td><input type="text" class="inside" name="fathers_number" placeholder="Mobile Number"></td>
                        </tr>
                        <tr>
                            <td><label>Grade level:</label></td>
                            <td>
                                <select name="grade_level"required>
                                    <option value="">Choose:</option>
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
            
                                <input class="submit" type="submit" value="submit">
                            </form>
                        </div>
                    </div>
</body>

</html>
