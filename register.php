<?php 
include('header.php');
include('connect.php');
session_start();
 ?>

<?php
//require('db.php');

// If form submitted, insert values into the database.
if (isset($_POST['username'])){
       // removes backslashes
	$username = stripslashes($_POST['username']);
	$username = mysqli_real_escape_string($con,$username); 
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $address = stripslashes($_POST['address']);
    $address = mysqli_real_escape_string($con,$address);
	$email = stripslashes($_POST['email']);
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
             if(isset($_POST['sdt']))
            {
                $Phone = $_POST['sdt'];
                $_SESSION['sdt'] = $Phone;
            }
            if(isset($_POST['email']))
            {
                $Email = $_POST['email'];
                $_SESSION['email'] = $Email;
            }
            if ($con) {
               
                $result1= mysqli_query($con,"SELECT * FROM users");
                if (mysqli_num_rows($result1) == 0) {
                     $query = "INSERT INTO `users` (user_name,address, password,sdt, email)
                         VALUES ('$User','$Address', '".password_hash($Password,PASSWORD_DEFAULT)."','$Phone','$Email')";
                         if (mysqli_multi_query($con, $query)) {
                            echo "Register susseccful";
                            // echo "<script language='javascript'>";
                            // echo "alert('Register susseccful')"; 
                            // echo "</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }else{
                         while($row = mysqli_fetch_array($result1)){
                    if ($User == $row['user_name']) {
                         echo "User đã tồn tại vui lòng đăng ký user khác";
                     } 
                    else{
                         $query = "INSERT INTO `users` (user_name,address, password,sdt, email)
                         VALUES ('$User','$Address', '".password_hash($Password,PASSWORD_DEFAULT)."','$Phone','$Email')";
                         if (mysqli_multi_query($con, $query)) {
                            echo "Register susseccful";
                            // echo "<script language='javascript'>";
                            // echo "alert('Register susseccful')"; 
                            // echo "</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    } 
                }
                

              
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
                      <input type="text" class="form-control input" name="sdt" placeholder="Phome Number" required="Ban Phai Nhap">
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