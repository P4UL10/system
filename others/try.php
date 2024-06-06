<?php  include("config.php");


  ?>

<!DOCTYPE html>
<html>
<head>
  <title>User Login </title>
</head>



<body>
 
  <br><br>
  <center>
     
<form  method="post" action="">
  
  <div class="form-outline">
    


<div class="pt-1 ">
    <input type="name"  name="name" >
    <input type="email" name="email" >
    <input type="status" name="status">
<button  type="submit" name="submit">Submit</button>
</div>
     
</form>
</center>
</body>
</html>

<?php 

     if (isset($_POST['submit']))  {

        $name = $_POST['name'];
        $email =   $_POST['email'];
        $status =   $_POST['status'];
 
        $sub = mysqli_query($conn,"INSERT INTO pending_list (name, email, status)VALUES('$name','$email','$status')");

 if($sub>0){

  echo "your request is  under process! ";

 }
 else
 {
  
  echo "something went wrong ! ";
 }

       
 }
     

      

?>