<?php session_start();
//include('header.php'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="./css/ProjectCar1.css">
<link rel="stylesheet" type="text/css" href="./css/ProjectCarti.css">
<link rel="stylesheet" type="text/css" href="./css/Product.css">
<link rel="stylesheet" type="text/css" href="./css/stylety.css">
  <link rel="stylesheet" href="css/hieuunganh.css">

  <nav class="navbar navbar-fixed-top navbar-expand-md" style="background: black;" >

  <a href="home.php"><div class="navbar-item navbar-brand"><img class="img" src="./images/logo.jpg"></div></a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto">
       
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"style="color: white;">
          <strong>VEHICLES</strong></a>
       
    
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="color: white;">
          <strong>SHOPPING TOOLS</strong></a>
       
      </li>

      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="<navbarDropdown></navbarDropdown>" role="button" data-toggle="dropdown" style="color: white;">
          <strong>OUR STORY</strong></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="ourstory.html"><strong>Innovation</strong></a>
          <a class="dropdown-item" href="ourstory1.html"><strong>Performance</strong></a>
          <a class="dropdown-item" href="#"> <strong>Designer</strong></a>
          <a class="dropdown-item" href="#"> <strong>Safety</strong></a>
          <a class="dropdown-item" href="#"> <strong>Event</strong></a>
          <a class="dropdown-item" href="#"> <strong>Technology</strong></a>
        </div>
    
      </li>
    </ul>

   <div class="input-group mb-3 inputsearch">
          <input id="search" type="text" class="form-control " placeholder="Search">  
      <div class="input-group-prepend">
          <button onclick="validateForm()" class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i> Search</button>
      </div>
    </div>s
    </div>
       <a class="nav-link" href=""><img class="giohang" src="images/giohang.png"></a>
       <a class="nav-link" href="register.php">Register</a>
        <a class="nav-link" href="login.php">Login</a>
</div>
  </nav>
<?php 
include('connect.php');
?>

<?php 
if (isset($_POST['user'])){
    $username = stripslashes($_POST['user']);
    $username = mysqli_real_escape_string($con,$username); 
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con,$password);
  }
?>

<?php
   if (isset($_POST['submit'])) {
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['user']))
            {
                $User = $_POST['user'];
                $_SESSION['user'] = $User;  
            }
        if(isset($_POST['password']))
            {
                $Password = $_POST['password'];
                $_SESSION['password'] = $Password;
            } 
        if ($con){ 
            $result1= mysqli_query($con,"SELECT * FROM users");
                while($row = mysqli_fetch_array($result1)){
                    if ($User == $row['user_name'] && password_verify($Password,$row['password'])) {
                       echo "Login susseccful";
                       header("Location: product.php");
                     }
                       elseif ($User=='user' && $Password=='password') {
                        header("Location: viewsanpham.php");
                       
                    }else{ 
                      echo "Login no succeccful";
                    }
                  }
                }     
            }
        }   
        //              
?>

  <content>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15662.997184111862!2d106.68219945!3d11.05741355!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1541561650719" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <form method="post"> 
            <!-- Vertical -->
            <div class="panel-danger">
            <div class="panel-heading">
            
            </div>
            <div class="panel-body" style="border: 0.5px solid pink;width: 85%" >
            <div class="form-group center" style="">
              <h2><strong> <center>Đăng Nhập</center></strong></h2>
               <label for="myEmail">User Name</label><br />
               <input type="text" class="form-control input1" name="user" style="width: 80%;" placeholder="User Name" required="Ban Phai Nhap" ><br />
               <label for="myPassword">Password</label><br />
               <input type="password" class="form-control input1" name="password" style="width: 80%;" placeholder="Password" required="Ban Phai Nhap" ><br />
               <button type="submit" class="btn btn-info " name="submit">Log in</button>
               <p style="width:300px ">Not registered yet? <a href='register.php'>Register Here</a></p>  
            </div>
          </div>
          </form> 
        </div>
      </div>
    </div>
  </content>

<!-- <?php include('footer.php') ?>
 -->


	 