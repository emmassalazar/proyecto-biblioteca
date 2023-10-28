<?php
if(isset($_GET['editar_cuenta'])){
    $user_session_name=$_SESSION['username_usuario'];
    $select_query="SELECT * from `usuarios_tabla` where username_usuario='$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $id_usuario=$row_fetch['id_usuario'];
    $nombre_usuario=$row_fetch['nombre_usuario'];
    $apellido_usuario=$row_fetch['apellido_usuario'];
    $username_usuario=$row_fetch['username_usuario'];
    $correo_usuario=$row_fetch['correo_usuario'];
    $genero_usuario=$row_fetch['genero_usuario'];
    $fecha_nacim_usuario=$row_fetch['fecha_nacim_usuario'];
    // $contraseña=$row_fetch['contraseña'];
    // $confirm_contraseña=$row_fetch['confirm_contraseña'];

    if(isset($_POST['editar_usuario'])){
        $actualizar_id=$id_usuario;

        $nombre_usuario=$_POST['nombre'];
        $apellido_usuario=$_POST['apellido'];
        $username_usuario=$_POST['username_usuario'];
        $correo_usuario=$_POST['correo'];
        $genero_usuario=$_POST['genero'];
        $fecha_nacim_usuario=$_POST['fechadenacimiento'];
        $foto_de_perfil=$_FILES['fotodeperfil']['name'];
        $foto_de_perfil_tmp=$_FILES['fotodeperfil']['tmp_name'];

        move_uploaded_file($foto_de_perfil_tmp,"user_area/fotos_de_perfil/$foto_de_perfil");
        
        $update_data="UPDATE `usuarios_tabla` set nombre_usuario='$nombre_usuario', apellido_usuario='$apellido_usuario',username_usuario='$username_usuario',correo_usuario='$correo_usuario',genero_usuario='$genero_usuario',fecha_nacim_usuario='$fecha_nacim_usuario',id_usuario=$actualizar_id, foto_perf_usuario='$foto_de_perfil'";

        $result_query_update=mysqli_query($con,$update_data);
        if($result_query_update){
            echo "<script>alert('Datos Actualizados con éxito.')</script>";
            echo "<script>window.open('user_area/logout.php','_self')</script>";

    }
}
}
?>

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
    <h3>Editar Cuenta</h3>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="box" placeholder="Cambie su nombre" id="nombre" autocomplete="off" required="required" value="<?php echo $nombre_usuario ?>">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" class="box" placeholder="Cambie su apellido" id="apellido" autocomplete="off" required="required" value="<?php echo $apellido_usuario ?>">
    <label for="username_usuario">Nombre de Usuario</label>
    <input type="text" name="username_usuario" class="box" placeholder="Ingrese un nombre de usuario" id="username_usuario" value="<?php echo $username_usuario ?>">
    <label for="correo">Correo</label>
    <input type="email" name="correo" class="box" placeholder="Cambie su correo electrónico" id="correo" autocomplete="off" required="required" value="<?php echo $correo_usuario ?>">
    <label >Género</label>
    <select name="genero" value="<?php echo $genero_usuario ?>">
        <option>Elegir género</option>
        <option>Femenino</option>
        <option>Masculino</option>
        <option>No-Binario</option>
        <option>Género Fluido</option>
        <option>Otro</option>
    </select>
    <label for="fechadenacimiento">Fecha de Nacimento</label>
    <input type="date" name="fechadenacimiento" class="box" placeholder="Cambie su fecha de nacimiento" id="fechadenacimiento" autocomplete="off" required="required" value="<?php echo $fecha_nacim_usuario ?>">
    <!-- <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" class="box" placeholder="Cambie su contraseña" id="contraseña" autocomplete="off" required="required">
    <label for="confirm_contraseña">Confirmar contraseña</label>
    <input type="password" name="confirm_contraseña" class="box" placeholder="Reingrese su contraseña" id="confirm_contraseña" autocomplete="off" required="required"> -->
    <label for="fotodeperfil">Foto de perfil</label>
    <input type="file" name="fotodeperfil" class="box" placeholder="Cambie su foto de perfil" id="fotodeperfil">

    <input type="submit" value="Editar" class="btn" name="editar_usuario">

</form>
</div>
</body>
</html>