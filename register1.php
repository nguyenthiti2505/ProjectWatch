<body>
<?php
session_start(); 
include('header.php');
include('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `users` (username, password, email)
            VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login1.php'>Login</a></div>";
        }
    }else{
?>
<div class="container" >
        <div class="panel panel-danger" name="from1">
            <div class="panel-heading">
                <h1 >Tạo Tài Khoản Mới</h1>
            </div>
            <div class="panel-body">
                <form action="" method='POST' >
                    <div class="form-group">
                      <input type="text" class="form-control input" name="username" placeholder="Tên" required="Ban Phai Nhap">
                    </div>
                    <div class="form-group">
                        <a><input type="email"  name="email" class="form-control input" placeholder="Số di động hoặc email" required="Ban Phai Nhap"></a>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input" name="password" placeholder="Mật khẩu mới" required="Ban Phai Nhap" >
                    </div>
                    <div>
                        <button type="submit" name="submit" value="Register" class="btn btn-danger register">Register</button>
                    </div>
                </div>
                </form>
        </div>      
</div>
<?php } ?>
</body>
</html>