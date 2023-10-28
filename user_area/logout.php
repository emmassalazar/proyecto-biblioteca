<?php
session_start();
session_unset();
session_destroy(); 
echo"<script>alert('La sesión fue cerrada.')</script>";
echo"<script>window.open('../main.php','_self')</script>";
?>