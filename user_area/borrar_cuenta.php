<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="register-form-container">
    <form method="post" action="" enctype="multipart/form-data">
    <h3>Borrar Cuenta</h3>
    

    <input type="submit" value="Borrar Cuenta" class="btn" name="borrar_usuario">
    <input type="submit" value="No borrar Cuenta" class="btn" name="no_borrar_usuario">

</form>
</div>
</body>
</html>
<?php 
    $username_session=$_SESSION['username_usuario'];
    if(isset($_POST['borrar_usuario'])){
        $delete_query="DELETE from `usuarios_tabla` where username_usuario='$username_session' ";
        $result=mysqli_query($con,$delete_query);
        if($result){
            session_destroy();
            echo"<script>alert('Cuenta Eliminada con éxito.')</script>";
            echo"<script>window.open('main.php','_self')</script>";

        }
    }

    if(isset($_POST['no_borrar_usuario'])){
        echo"<script>window.open('perfil.php','_self')</script>";

    }
?>