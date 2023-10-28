<?php include('../includes/connect.php');
include('../funciones/funciones_comunes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca | Página Administrador</title>

    <!--INICIO LINKS-->
    <!-- CSS COSTUM LINK -->
    <link rel="stylesheet" href="../style.css">
    <!-- CSS BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS SWIPER LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FIN LINKS-->
</head>
<body>



<!-- nabvar -->
<div class="barra1 container-fluid">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <img src="https://www.tlbx.app/200-300.svg" alt="" style="width:7%;height:7%;">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-light" style="font-size:4rem;">Bienvenido Admin</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
    <!-- secnd child -->
    <br><br><br><div class="heading"><span>Panel de Control del Administrador</span></div><br><br><br>
    <!-- third child -->
    <div class="row">
        <div class="col-md-12 barra-admin">
                <button><a href="index.php?cargar_libros" class="btn">Cargar libro</a></button>

                <button><a href="index.php?todos_libros" class="btn">Todos los Libros</a></button>

                <button><a href="index.php?crear_genero" class="btn">Crear Géneros</a></button>

                <button><a href="#" class="btn">Revisar Géneros</a></button>

                <button><a href="index.php?crear_az" class="btn">Crear A-Z</a></button>

                <button><a href="#" class="btn">Revisar A-Z</a></button>

                <button><a href="#" class="btn">Lista Usuarios</a></button>

                <button><a href="#" class="btn">Cerrar sesión</a></button>
        </div>
    </div>
    <!-- fourth child -->
    <div class="container my-5">
        <?php
        if(isset($_GET['crear_genero'])){
            include('crear_generos.php');}
            
        if(isset($_GET['crear_az'])){
            include('crear_az.php');}

        if(isset($_GET['cargar_libros'])){
            include('cargar_libros.php');}

        if(isset($_GET['todos_libros'])){
            include('todos_libros.php');}

        if(isset($_GET['editar_libros'])){
            include('editar_libros.php');}
        
        ?>
    </div>
</div>

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