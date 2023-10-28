<?php
if(isset($_POST['login_usuario'])){
    $username_usuario=$_POST['username_usuario'];
    $contraseña=$_POST['contraseña'];

    $select_query="SELECT * from `usuarios_tabla` where username_usuario='$username_usuario'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($rows_count> 0){
        if(password_verify($contraseña,$row_data['contraseña_usuario'])){
        $_SESSION['username_usuario']=$username_usuario;
        echo "<script>alert('Ingreso Exitoso')</script>";
        echo "<script>window.open('./main.php','_self')</script>";
        }else{
        echo "<script>alert('Credenciales inválidas')</script>";
        }
    }else{
        echo "<script>alert('Credenciales inválidas')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca | Iniciar Sesión</title>

    <link rel="stylesheet" href="../style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<!--LOG IN INICIA-->
<div class="login-form-container">
    <div id="close-login-btn" class="fas fa-times"></div>
    <form action="" method="post">
        <h3>Ingresar</h3>
        <label for="username_usuario">Nombre de usuario</label>
        <input type="text" name="username_usuario" class="box" placeholder="Ingrese su nombre de usuario" id="username_usuario" autocomplete="off">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" class="box" placeholder="Ingrese su contraseña" id="contraseña" autocomplete="off">
        <input type="submit" value="Ingresar" class="btn" name="login_usuario">
        <p>¿Olvidó su contraseña? <a href="#">Click Aquí</a></p>
        <p>¿No tiene cuenta? <a href="user_area/user_registro.php">Regístrese Aquí</a></p>
    </form>
</div>
<!--LOG IN TERMINA-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ecfed6382a.js" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</body>
</html>