<?php 
@include '../interface/config.php';

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string ($conn,$_POST['name']);
$email = mysqli_real_escape_string ($conn,$_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$user_type = $_POST['user_type'];
$select = " SELECT * FROM user_form WHERE email ='$email' && password = '$pass'";    
$result = mysqli_query($conn,$select);

if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already  exist!';
 }else 
        if($pass != $cpass){
    $error[] = 'password not matched';
        }else{
        $insert = "INSERT INTO user_form(name, email, password,user_type) VALUES('$name','$email','$pass','user')";
        mysqli_query($conn,$insert);
        header('location:login_form.php');   
        }
    }

?>

<DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
.checkbox{
display: inline;
width:20px;

}
#terms-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

#blur.blurer{
  filter: blur(20px);

}

.pop.blurer{
  visibility: visible;
  top: 10%;
  transform: translate(10%,10%) scale(1);
}

.terms-box h4 span{
    color: rgb(245, 68, 68);
    text-transform: uppercase;
}
.buttons {
    justify-content: space-between;
    margin-left: 100px;
    margin-right: 100px;
    text-align: center;
    text-decoration: none;
}

#accept{
  background-color: rgb(245, 68, 68);
  padding: 11px;
  border: 1px solid #eee;
  border-radius: 20px;
  color: white;
  width: 100px;
  cursor: pointer;

}

.decline{
  background-color: rgb(245, 68, 68);
  padding: 11px;
  border: 1px solid #eee;
  border-radius: 20px;
  width: 100px;
  color: white;
  cursor: pointer;

}

.accept:hover{
    opacity: .6;
}
h4{
    font-size: 10px;
    font-weight: bolder;
}
    </style>
</head>
<body>
    <div id="blur">
<div class="form-container">
<form action="" method="post">
    <h3>register now</h3>
    <?php
    if(isset($error)){
        foreach($error as $error){
         echo'<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>
    <div class="inside">
    <input  type="text" name="name" required placeholder="enter your fullname">
    <input  type="email" name="email" required placeholder="enter your email ">
    <input  type="password" name="password" required placeholder="enter your password">
    <input  type="password" name="cpassword" required placeholder="confirm your password">
</select>
</div>
<div class="checkbox">
<input type="checkbox" class="checkbox" onchange="pop()">by continuing you agree to Terms and Conditions
</div>
<div class="inside">
<input type="submit" name="submit" value="register now" class="form-btn">
</div>
<p>already have an account? <a href="login_form.php">Login now</a></p>
</form>
</div>
</div>
<div class="popup" id="terms-box">
            <div class="popuptext">
            <h2>Terms And Conditions</h2>
            <p>Greetings User</p>
            <p>Republic Act No. 10173 or Data Privacy Act of 2012 is an act protecting individual personal information in information and communications systems in the government and the private sector, creating for this purpose a national privacy commission, and for other purposes.</p>

            <p>The community Learners Academy of San Jose (CLASJ). Recognizes its responsibility in protecting personal and sensitive information. This notice shall explain the purpose and legal bases for the processing of common personal and sensitive data that CLASJ school process the data collected by submitting all the information.
            </p>

            <p>By submitting this form, I have read the Data Privacy Policy of the school and fully aware that the institution is committed to protect the privacy right of individuals on personal and sensitive information pursuant to the provisions of Republic Act 10173 or The Data Privacy Act of 2012, its implementing rules and regulations and other relevant policies, including issuances of the National Privacy Commission and applicable laws and regulations relating to privacy and data protection. In this regard, i do hereby give a consent of all information to CLASJ school.</p>

            <h4><p>BY SUBMITTING THIS FORM, YOU CONFIRM THAT YOU HAVE READ AND ACCEPTED THE DECLARATION STATED ABOVE.</p></h4>
            <div class="buttons">
      <button  id="accept">Accept</button><button class="decline" onclick="pop()">Decline</button>
        </div>
    </div>
</div>
<script>
      function checks(){
        var checkbox =document.getElementById("check");
      var acceptbtn =document.getElementById("accept");
      if(checkbox.checked){

        acceptbtn.check = true;
      
      }else{
        acceptbtn.check = false;
      }

    }

      let popup = document.getElementById("terms-box");
      let blur = document.getElementById("blur");
      function pop(){
        blur.classList.toggle('blurer');
        popup.classList.add("pop");
      }

      
    document.getElementById("accept").addEventListener("click", function() {
    window.location.href = "student_dashboard.php";
});
</script>

</body>
</html>