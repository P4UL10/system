<! DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tech2etc Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<section id="menu">
<div class="logo">
<img src="../prototype/back.jpg" alt="">
<h2>Student Dashboard</h2>
</div>

<div class="items">
<li> <a href="#">Profile</a></li>
<li> <a href="#">Dashboard</a></li>
<li> <a href="#">Notification</a></li>
<li> <a href="#">Schedule</a></li>
<li> <a href="#">My Blue Card</a></li>
</div>
</section>

<section id="interface">
<div class="navigation">
<div class="n1">
    <div>
        <i id="menu-btn" class="fas fa-bars"></i>
</div>
<div class="search">
<i class="far fa-search"></i>  
<input type="text" placeholder="Search">
</div>
</div>

<div class="profile">
<i class="far fa-bell"></i>
<img src="images/1.jpg" alt="">
</div>
</div>

<h3 class="i-name">
    Dashboard
</h3>

<div class="values">
<div class="val-box">
        <i class="fas fa-users"> </i>
        <div>
            <h3>8,267</h3>
            <span>New Users</span>
</div>
</div>
<div class="val-box">
        <i class="fas fa-users"> </i>
        <div>
            <h3>8,267</h3>
            <span>Total Orders</span>
</div>
</div>
<div class="val-box">
        <i class="fas fa-users"> </i>
        <div>
            <h3>8,267</h3>
            <span>Product Sell</span>
</div>
</div>
<div class="val-box">
        <i class="fas fa-users"> </i>
        <div>
            <h3>8,267</h3>
            <span>This Month</span>
</div>
</div>
</div>

<dir class="board">
    <table width="1005">
        <thead>
            <tr>
                <td>Name</td>
                <td>Title</td>
                <td>Status</td>
                <td>Role</td>
                <td></td>
</tr>
</thead>
<tbody>
    <tr>
        <td class="people">
            <img src="images/2.jpg" alt="">
            <div class="people-de">
                <h5>John Doe</h5>
                <p>john@example.com</p>
</div>
</td>

<td class="people-des">
    <h5>Software Engineer</h5>
    <p>Web dev</p>
</td>

<td class="active">
    <p>Active</p></td>

<td class="role">
    <p>Owner</p>
</td>   

<td class="edit"><a href="#">Edit</a></td>
</tr>
</tbody>
</table>
</dir>
</section>

<script>
    $('#menu-btn').click(function(){ 
        $('#menu').toggleCLass("active");
    })
   </script>

</body>
</html>
