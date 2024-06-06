<?php
include '../interface/config.php';
include '../interface/function.php';

$disableSubmit = true; 


session_start();

$_SESSION['disable_submit'] = $disableSubmit;

if(isset($_POST['submit'])){
    $LRN = mysqli_real_escape_string($conn, $_POST["lrn"]);
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


    $sql_grade_level = "INSERT INTO bluecard (lrn, grade_level) VALUES ('$id', '$LRN')";
    mysqli_query($conn, $sql_grade_level);

    // Insert data into database
    $sql = "INSERT INTO user_data (last_name, first_name, middle_name, extension_name, birthdate, gender, number, email, address, mothers_name, mothers_number, fathers_name, fathers_number, grade_level) VALUES ('$lname', '$fname', '$mname', '$exname', '$birthdate', '$gender', '$number', '$email', '$address', '$mother_name', '$mother_number', '$father_name', '$father_number', '$grade_level')";
    mysqli_query($conn, $sql);
    header ('location:../interface/output.html');
    exit(); // Stop execution after redirect
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
    <style>
        body {
            background: linear-gradient(to right, rgb(231, 253, 194), rgb(129, 173, 244));
        }

        .container {
            width: 80%;
            height:109vh;
            margin: 60px auto;
        }

        table {
            width: 100%;
            border:0;
        }

        th, td {
            padding: 10px;
            border: 0;
            text-align: left;
        }

        .inside {
            width: calc(100% - 20px);
            padding: 5px 10px;
        }

        .submit {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #45a049;
        }
        .back {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            position: relative;
            left:-40px;
        }

        .back:hover {
            background-color: #d32f2f;
        }
    </style>
      <script>
        // Function to validate phone number to contain only digits
        function validatePhoneNumber(input) {
            var phoneNumber = input.value.trim();
            // Check if the phone number contains only digits
            if (!/^\d+$/.test(phoneNumber)) {
                alert("Phone number must contain only numbers.");
                // Clear the input field
                input.value = "";
                // Focus back on the input field
                input.focus();
                return false;
            }
            return true;
        } 
    </script>
</head>
<body>
<a href="dashboard_user.php" class="back">Back</a>
    <div class="container">
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
            <h1>Enrollment Form</h1>
            <table>
                <tr>
                     <th><label for="date">Learners Reference Number(LRN):</label></th>
                    <td><input type="number" class="inside" name="birthdate" placeholder="LRN" required></td>
                    </tr>
                    <th><label>Full name:</label></th>
                    <td><input type="text" class="inside" name="last_name" placeholder="Last Name"  pattern="[A-Za-z]+" required></td>
                    <td><input type="text" class="inside" name="first_name" placeholder="First Name" pattern="[A-Za-z]+" required></td>
                    <td><input type="text" class="inside" name="middle_name" placeholder="Middle Name" pattern="[A-Za-z]+" required></td>
                    <td><input type="text" class="inside" name="extension_name" placeholder="Extension(optional)" pattern="[A-Za-z]+"></td>
                </tr>
                <tr>
                    <th><label for="date">Birthdate:</label></th>
                    <td><input type="date" class="inside" name="birthdate" placeholder="Birthdate" required></td>
                    <th><label>Gender:</label></th>
                    <td colspan="2">
                        <select name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="number">Phone Number:</label></th>
                    <td><input type="tel" class="inside" id="number" name="number" placeholder="9xxxxxxxxx"  pattern="\d+" minlength="11" maxlength="11" required></td>
                    <th><label>Email Address:</label></th>
                    <td colspan="2"><input type="text" class="inside" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <th><label>Full Address:</label></th>
                    <td colspan="4"><input type="text" class="inside" name="Address" placeholder="Address" required style="width:500px; height:40px;"></td>
                </tr>
                <tr>
                    <th><label>Name of Mother:</label></th>
                    <td><input type="text" class="inside" name="mothers_name" placeholder="Fullname" pattern="[A-Za-z]+"></td>
                    <th><label for="parentnumber">Phone Number:</label></th>
                    <td colspan="2"><input type="text" class="inside" name="mothers_number" placeholder="Mobile Number" pattern="\d+" minlength="11" maxlength="11"></td>
                </tr>
                <tr>
                    <th><label>Name of Father:</label></th>
                    <td><input type="text" class="inside" name="fathers_name" placeholder="Fullname" pattern="[A-Za-z]+"></td>
                    <th><label for="parentnumber">Phone Number:</label></th>
                    <td colspan="2"><input type="text" class="inside" name="fathers_number" placeholder="Mobile Number" pattern="\d+" minlength="11" maxlength="11"></td>
                </tr>
                <tr>
                    <th><label>Grade level:</label></th>
                    <td colspan="4">
                        <select name="grade_level" required>
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
                <tr>
                  <th colspan="5"><center><h2>Check if you have the following Requirements:(On Hand)</h2></center></th>
                    </tr>
                <tr>
                 
                    <th><label>PSA (Birth certificate):</label></th>
                    <td colspan="1"><input type="checkbox" class="inside" name="psa_certificate" ></td>
                </tr>
                <tr>
                    <th><label>Previous I.D:</label></th>
                    <td colspan="4"><input type="checkbox" class="inside" name="previous_id" ></td>
                </tr>
                <tr>
                    <th><label>Form 138 (Report Card):</label></th>
                    <td colspan="4"><input type="checkbox" class="inside" name="report_card" ></td>
                </tr>
            </table>
            <input class="submit" type="submit" name="submit" value="Submit">
        </form>
    </div>
    <script>
        // Get the number input element
        var numberInput = document.getElementById("number");

        // Add event listener for the "wheel" event
        numberInput.addEventListener("wheel", function(event) {
            // Prevent default scroll behavior
            event.preventDefault();
        });
    </script>
</body>
</html>


