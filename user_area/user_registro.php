<?php 
include('../includes/connect.php');
include('../funciones/funciones_comunes.php');

if(isset($_POST['crear_usuario'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $username_usuario=$_POST['username_usuario'];
    $correo=$_POST['correo'];
    $genero=$_POST['genero'];
    $fechadenacimiento=$_POST['fechadenacimiento'];
    $contraseña=$_POST['contraseña'];
    $confirm_contraseña=$_POST['confirm_contraseña'];

    $hash_contraseña=password_hash($contraseña, PASSWORD_DEFAULT);

    $fotodeperfil=$_FILES['fotodeperfil']['name'];
    $fotodeperfil_tmp=$_FILES['fotodeperfil']['tmp_name'];

    $ip_usuario=getIPAddress();

    move_uploaded_file($fotodeperfil_tmp,"./fotos_de_perfil/$fotodeperfil");
    
    $select_query= "SELECT * from `usuarios_tabla` where username_usuario='$username_usuario' or correo_usuario='$correo' or contraseña_usuario='$contraseña'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count> 0){
        echo"<script>alert('Algunos datos no son válidos.')</script>";
    }
    elseif($contraseña!=$confirm_contraseña){
        echo"<script>alert('Las contraseñas no coinciden')</script>";
    }
    else{    
        $insert_query="INSERT into `usuarios_tabla`(nombre_usuario,apellido_usuario,correo_usuario,genero_usuario,fecha_nacim_usuario,	contraseña_usuario,foto_perf_usuario,ip_usuario,username_usuario)values('$nombre','$apellido','$correo','$genero','$fechadenacimiento','$hash_contraseña','$fotodeperfil','$ip_usuario','$username_usuario')";
        $sql_execute=mysqli_query($con,$insert_query);
        echo"<script>window.open('../main.php','_self')</script>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca | Crear Cuenta</title>

    <link rel="stylesheet" href="../style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<!--INICIA FORMULARIO DE REGISTRO-->
<div class="register-form-container">
    <form method="post" action="" enctype="multipart/form-data">
    <h3>Crear cuenta</h3>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="box" placeholder="Ingrese su nombre" id="nombre" autocomplete="off" required="required">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" class="box" placeholder="Ingrese su apellido" id="apellido" autocomplete="off" required="required">
    <label for="username_usuario">Nombre de Usuario</label>
    <input type="text" name="username_usuario" class="box" placeholder="Ingrese un nombre de usuario" id="username_usuario">
    <label for="correo">Correo</label>
    <input type="email" name="correo" class="box" placeholder="Ingrese su correo electrónico" id="correo" autocomplete="off" required="required">
    <label>Género</label>
    <select name="genero">
        <option>Elegir género</option>
        <option>Femenino</option>
        <option>Masculino</option>
        <option>No-Binario</option>
        <option>Género Fluido</option>
        <option>Otro</option>
    </select>
    <label for="fechadenacimiento">Fecha de Nacimento</label>
    <input type="date" name="fechadenacimiento" class="box" placeholder="Ingrese su fecha de nacimiento" id="fechadenacimiento" autocomplete="off" required="required">
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" class="box" placeholder="Ingrese su contraseña" id="contraseña" autocomplete="off" required="required">
    <label for="confirm_contraseña">Confirmar contraseña</label>
    <input type="password" name="confirm_contraseña" class="box" placeholder="Reingrese su contraseña" id="confirm_contraseña" autocomplete="off" required="required">
    <label for="fotodeperfil">Foto de perfil</label>
    <input type="file" name="fotodeperfil" class="box" placeholder="Ingrese su foto de perfil" id="fotodeperfil">

    <div class="checkbox">
        <input type="checkbox" name="" id="tyc" required="required">
        <label for="tyc">Acepto los términos y condiciones.</label>
    </div>
    <input type="submit" value="Ingresar" class="btn" name="crear_usuario">

    <p>¿Ya tienes una cuenta? <a href="user_area/user_login.php">Inicie Sesión Aquí</a></p>

</form>
</div>
<!--TERMINA FORMULARIO DE REGISTRO-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ecfed6382a.js" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</body>
</html>

<?php

?>