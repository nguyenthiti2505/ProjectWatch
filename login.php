<?php
include 'header.php';
include 'footer.php';
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['user_name'])){
        // removes backslashes
	$user_name = stripslashes($_REQUEST['user_name']);
        //escapes special characters in a string
	$user_name = mysqli_real_escape_string($con,$user_name);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE user_name='$user_name'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['user_name'] = $user_name;
            // Redirect user to index.php
	    header("Location: viewsanpham.php");
         }else{
	echo "<div class='form'>
<h3>user_name/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="container">
<form action="" method="post" name="login">
	<div class="panel panel-danger" name="from1">
            <div class="panel-heading">
                <h1>Log In</h1>
            </div>
            <div class="panel-body">
		<div class="form-group">
	        <input type="text" class="form-control input" name="user_name" placeholder="Tên" value="<?php if(isset($_COOKIE["user_name"])) { echo $_COOKIE["user_name"]; } ?>" class="input-field" required >
	    </div>
	    <div class="form-group">
	        <input type="password" class="form-control input" name="password" placeholder="Mật khẩu"
	        value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field" required >
	    </div>
	    <div>
	    	<input type="checkbox" name="remember"> Remember me
	    </div><br>
	    <div>
	        <button type="submit" name="submit" value="Login" class="btn btn-danger register">Login</button>
	    </div>
</form>
</div>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
	
<?php } ?>
</body>
</html>
