<?php

require_once 'config.php';
require_once 'function.php';
$result = display_data();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>

   

    <section>
       
        <div class="navbar" id="navigation">
            <img src="logo.png" alt="">
            <ul class="center-nav">
                <li><i class="fa-solid fa-house"></i><a href="#"> Dashboard </a></li>
                <li><i class="fa-solid fa-copy"></i><a href="#"> Approval </a></li>
                <li><i class="fa-sharp fa-solid fa-chart-simple"></i><a href="#"> Analytics </a></li>
            </ul>
            <ul class="bottom-nav">
                <hr>
                <li><i class="fa-solid fa-gear"></i><a href="#"> Settings </a></li>
                <li><i class="fa-solid fa-power-off"></i><a href="#"> Logout </a></li>
            </ul>
        </div>

      
        <div class="main-content">
            <div class="main-top">
                <div class="bars" id="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="input">
                    <input type="text" placeholder="Search here...">
                </div>
                <div class="user">
                    <img src="./user.png" alt="">
                </div>
            </div>

            


        
            <div class="activity">
                <div class="activities">

<h1 class="text-center  text-white bg-dark col-md-12">PENDING LIST</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
	 <th scope="col">NAME</th>
   <th scope="col">EMAIL</th>
	 <th scope="col">STATUS</th>
    </tr>
  </thead>

<?php 

$query = "SELECT * FROM  pending_list WHERE status = 'pending' ORDER BY user_id ASC";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))  { ?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['user_id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['status']; ?></td>


     <td>
		<form action="approval.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['user_id']; ?>"/>
		<input type="submit" name="approve" value="approve"> <br>
		 <input type="submit" name="delete" value="delete"> 

		</form>
   </td>
    </tr>
   
  </tbody>
  <?php } ?>
</table>


<?php 
if(isset($_POST['approve'])){

	$id = $_POST['user_id'];
	$select = "UPDATE  pending_list SET status = 'approved' WHERE user_id = '$id' ";
	$result = mysqli_query($conn,$select);
	header("location:approval.php");
}


if(isset($_POST['delete'])){

	$id = $_POST['user_id'];
	$select = "DELETE  FROM pending_list  WHERE user_id = '$id' ";
	$result = mysqli_query($conn,$select);
	header("location:approval.php");
}

 ?>









 
&nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp  &nbsp 


 <h1 class="text-center  text-white bg-success col-md-12
">APPROVED LIST </h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
    <th scope="col">ID</th>
	 <th scope="col">NAME</th>
   <th scope="col">EMAIL</th>
	 <th scope="col">STATUS</th>
    </tr>
  </thead>

<?php 
$query = "SELECT * FROM  pending_list " ;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)) { ?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['user_id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['status']; ?></td>
    </tr>
  </tbody>

  <?php } ?>

</table>


                </div>
            </div>

</body>

<script>
    const hamburger = document.getElementById('menu');
    const navigation = document.getElementById('navigation');
    hamburger.addEventListener('click', function () {
        navigation.classList.toggle('active')
        console.log('clicked');
    })
</script>

</html>