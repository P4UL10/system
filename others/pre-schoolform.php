<?php
include 'config.php';

if(isset($_POST['submit'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $birthday = $_POST['birthday'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mparentname = $_POST['mparentname'];
    $mnumber = $_POST['mnumber'];
    $fparentname = $_POST['fparentname'];
    $fnumber = $_POST['fnumber'];
    $gradelevel = $_POST['gradelevel'];

    $sql = "INSERT INTO user_data (lname, fname, mname, birthday, phonenumber, email, gender, address, mparentname, mnumber, fparentname, fnumber, gradelevel)
            VALUES ('$lname', '$fname', '$mname', '$birthday', '$phonenumber', '$email', '$gender', '$address', '$mparentname', '$mnumber', '$fparentname', '$fnumber', '$gradelevel')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Form not submitted.";
}

$conn->close();
?>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-school Form</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
<div class="container">
    
<form action="" method="post" class="form">
    <br>
    <br>
    <center><h1>Enrollment Form</h1></center>
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
                <Tr>
                <td><label for="date">Birthdate:</label></td>
                    <td><input type="date" class="holder" name="birthdate" placeholder="Birthdate"></td>
                            <td><label for="number">Phone Number:</label></td>
                                <td><input type="text" class="holder" name="number" placeholder="Mobile Number"></td>
                                        </tr>
                                        
                     
<tr>    
    <td><label>Email Address:</label></td>
    <td><input type="text" class="holder" name="email" placeholder="Email"> </td>
    
<td><label for="gender">Gender:</label> </td>
                     <td><select name="gender" id="gender">
                        <option value="male">Male</option>
                            <option value="female">Female</option>
                        
                     </select></td>
                                        </tr>
<tr>
                    <td><label>Full Address:</label></td>
<td><input type="text" class="holder" name="Address" placeholder="Address"></td>
                </tr>
<tr>
    <td><label>Name of Mother:</label></td>
    <td><input type="text" class="holder" name="mnameparent" placeholder="Fullname"></td>
    <td><label for="parentnumber">Phone Number:</label></td>
    <td><input type="text" class="holder" name="mparentmnumber" placeholder="Mobile Number"></td>
    </tr>
    <tr>
        <td><label>Name of Father:</label></td>
        <td><input type="text" class="holder" name="fnameparent" placeholder="Fullname"></td>
        <td><label for="fnumber">Phone Number:</label></td>
        <td><input type="text" class="holder" name="fnumber" placeholder="Mobile Number"></td>
        </tr>


        <tr>
                <td><label for="Previousid">Upload Previous ID:</label><td><input type="file" name="previousid"></td></input></td>
                <td><label for="Previousid">PSO/NSO(Birth Certificate):</label><td><input type="file" name="Birthcertificate"></td></input></td>
  </tr>
  <tr>
    <td><label for="Previousid">Report Card:</label><td><input type="file" name="reportcard"></td></input></td>
                
  </tr>
  <td><label>Grade level:</label></td>
  <td><select>
      <option default>
      <option  name="Preschool" value="1">1</option>
      <option  name="Preschool" value="2">2</option>
      <option name="Preschool" value="3">3</option>
      <option name="Preschool" value="4">4</option>
      <option  name="Preschool" value="5">5</option>
      <option  name="Preschool" value="6">6</option>
      <option  name="highschool" value="7">7</option>
      <option  name="highschool" value="8">8</option>
      <option name="highschool" value="9">9</option>
      <option name="highschool" value="10">10</option>
      <option  name="seniorhighschool" value="grade-11ABM">11ABM</option>
      <option  name="seniorhighschool" value="grade-11STEM">11STEM</option>
      <option name="seniorhighschool" value="grade-11HUMSS">11HUMSS</option>
      <option name="seniorhighschool" value="grade-11HUMSS">11GAS</option>
      <option name="seniorhighschool" value="grade-11ICT">11ICT</option>
      <option  name="seniorhighschool" value="grade-11H&M">11H&M</option>
      <option  name="seniorhighschool" value="grade-12ABM">12ABM</option>
      <option  name="seniorhighschool" value="grade-12STEM">12STEM</option>
      <option name="seniorhighschool" value="grade-12HUMSS">12HUMSS</option>
      <option name="seniorhighschool" value="grade-11HUMSS">11GAS</option>
      <option name="seniorhighschool" value="grade-12ICT">12ICT</option>
      <option  name="seniorhighschool" value="grade-12H&M">12H&M</option>
                      </select>
                          </td>
</table>
<button type="submit" class="submit">Submit</button>
</div>
</form>
</div>
</body>
</html>