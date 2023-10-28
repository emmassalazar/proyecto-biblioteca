<?php include('./includes/connect.php');
include('./funciones/funciones_comunes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca | Perfil de <?php echo $_SESSION['username_usuario']; ?> </title>

    <!--INICIO LINKS-->
    <!-- CSS COSTUM LINK -->
    <link rel="stylesheet" href="./style.css"> 
    <!-- CSS BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS SWIPER LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FIN LINKS-->
</head>
<body>

<!-- HEADER INICIA-->
<?php include("./includes/header.php"); ?>
<!--HEADER TERMINA -->


<section class='inicio2' id='inicio2'>
    <div class='heading'>
        <span>Bienvenido, <?php echo $_SESSION['username_usuario'];?></span>
    </div>
    </section>
    <section class='perfil row'>
        <div class='col-md-4'>
        <div class='row perfil-portada'>
    <!-- portada -->
    <div class='box'>
    <?php
        $username=$_SESSION['username_usuario'];
        $foto_de_perfil="SELECT * from `usuarios_tabla` where username_usuario='$username'";
        // $result_foto_de_perfil=mysqli_query($con,$foto_de_perfil);
        $foto_de_perfil=mysqli_query($con,$foto_de_perfil);
        $row_foto_de_perfil=mysqli_fetch_array($foto_de_perfil);
        $foto_de_perfil=$row_foto_de_perfil['foto_perf_usuario'];

        echo "<img src='./user_area/fotos_de_perfil/$foto_de_perfil' alt=''>";
    ?>
    <div class='icons'>
        <span><?php echo $username; ?></span>
        <br><br>
                <a href='perfil.php?editar_cuenta'>Editar Cuenta</a>
                <br>
                <a href='./favoritos.php'>Ver favoritos
                </a>
                <br>
                <a href='perfil.php?borrar_cuenta'>Borrar Cuenta</a>
                <br>
                <a href='./user_area/logout.php'>Cerrar Sesión
                </a>
            </div>
        </div>
    </div>
</div>
    <div class='col-md-8 perfil-tabla'>
        <?php
        if(isset($_GET['editar_cuenta'])){
            include('./user_area/editar_cuenta.php');
        }
        
        if(isset($_GET['borrar_cuenta'])){
            include('./user_area/borrar_cuenta.php');
        }
        ?>
    </div>
    </section>

<!-- FOOTER INICIA -->
<?php include("./includes/footer.php"); ?>
<!-- FOOTER TERMINA -->


<!-- SCRIPTS INICIAN -->
<!-- JS CUSTOM SCRIPTS -->
<script src="script.js" defer></script>
<!-- JS BOOTSTRAP LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- JS FONTAWESOME ICONS LINK -->
<script src="https://kit.fontawesome.com/ecfed6382a.js" crossorigin="anonymous"></script>
<!-- JS SWIPER LINK -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- SCRIPTS TERMINAN -->

</body>
</html>