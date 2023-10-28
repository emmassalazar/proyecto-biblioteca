<?php
session_start();

$con=mysqli_connect('localhost','root','','biblioteca');
if(!$con){
    die(mysqli_error($con));
}


?>