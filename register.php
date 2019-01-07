<?php 
include('header.php');
include('connect.php');
session_start();
 ?>

<?php
//require('db.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
       // removes backslashes
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $address = stripslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($con,$address);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);

}


	
    // $query = "INSERT INTO `users` (user_name,address, password, email)
    //         VALUES ('$username', '".md5($password)."', '$email')";
    // $result = mysqli_query($con,$query);
    //     if($result){
    //         echo "<div class='form'>
    //                 <h3>You are registered successfully.</h3>
    //                 <br/>Click here to <a href='login.php'>Login</a></div>";
    //     }
    // }else{
    // }
?>

<?php 
    if (isset($_POST['submit'])) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['username']))
            {
                $User = $_POST['username'];
                $_SESSION['username'] = $User;
            }
            if(isset($_POST['password']))
            {
                $Password = $_POST['password'];
                $_SESSION['password'] = $Password;
            }
            if(isset($_POST['address']))
            {
                $Address = $_POST['address'];
                $_SESSION['address'] = $Address;
            }
            if(isset($_POST['email']))
            {
                $Email = $_POST['email'];
                $_SESSION['email'] = $Email;
            }
            if ($con) {
               $query = "INSERT INTO `users` (user_name,address, password, email)
                         VALUES ('$User', '".password_hash($Password,PASSWORD_DEFAULT)."','$Address', '$Email')";
                         if (mysqli_multi_query($con, $query)) {
                            echo "<script language='javascript'>";
                            echo "alert('Register susseccful')"; 
                            echo "</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
            }
            
        }
    } 
            
 ?>


<center>
     <div class="">
        <h1 >Tạo Tài Khoản Mới</h1>
    </div>
    <div>
        <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" class="form-control input" name="username" placeholder="User" required="Ban Phai Nhap">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control input" name="password" placeholder="Mật khẩu mới" required="Ban Phai Nhap" >
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control input" name="address" placeholder="Address" required="Ban Phai Nhap">
                    </div>
                    <div class="form-group">
                        <a><input type="email"  name="email" class="form-control input" placeholder="Email" required="Ban Phai Nhap"></a>
                    </div>
                   
                    <div>
                        <button type="submit" name="submit" value="Register" class="btn btn-danger register">Register</button>
                    </div>
        </form>
    </div>
</center>
   
                



<?php include('footer.php') ?>