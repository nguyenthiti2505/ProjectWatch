<?php
// session_start();
if(!isset($_SESSION["user_name"])){
header("Location: home.php");
exit(); }
?>