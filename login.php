<?php 
include('header.php');
include('connect.php');
session_start();
 ?>

 <?php 
if (isset($_POST['user'])){
       // removes backslashes
  $username = stripslashes($_POST['user']);
  $username = mysqli_real_escape_string($con,$username); 
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con,$password);
  }

  ?>
<?php
   if (isset($_POST['login'])) {
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['user']))
            {
                $User = $_POST['user'];
            }
        if(isset($_POST['password']))
            {
                $Password = $_POST['password'];
            } 
        if ($con){ 
            $result1= mysqli_query($con,"SELECT * FROM users");
                while($row = mysqli_fetch_array($result1)){
                    if ($User == $row['user_name'] && password_verify($_POST['password'],password_hash($_SESSION['password'],PASSWORD_DEFAULT))) {
                       echo "Login susseccful"; 
                       header('Location: product.php');
                    }else{ 
                            echo "<script language='javascript'>";
                            echo "alert('Login no susseccful')"; 
                            echo "</script>";
                    }
                }     
        }
      }
    }
                      
?>

  <content>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
            <form method="post"> 
            <!-- Vertical -->
            <h1><strong> <pre>               LOG IN</pre> </strong></h1>
            <div class="form-group center" style="">
               <label for="myEmail">User Name</label><br />
               <input type="text" class="form-control" name="user" style="width: 500px;" placeholder="User Name" required="Ban Phai Nhap" ><br />
               <label for="myPassword">Password</label><br />
               <input type="password" class="form-control" name="password" style="width: 500px;" placeholder="Password" required="Ban Phai Nhap" ><br />
               <button type="submit" class="btn btn-info " name="login">Log in by facebook</button>
               <button type="submit" class="btn btn-primary button" name="login" >Log in by Google Chrome</button>   
            </div>
          </form> 
        </div>
        <div class="col-md-4">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15662.997184111862!2d106.68219945!3d11.05741355!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1541561650719" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </content>
<?php include('footer.php') ?>



	 <!-- 	<script src="js/jquery-3.3.1.js"></script>
      <script src="js/bootstrap.js"></script>
</body>
</html> -->