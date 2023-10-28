<!-- HEADER INICIA-->

<header class="header">
    <div class="header-1">
        <a href="main.php" class="logo"><i class="fas fa-book"></i>Biblioteca</a>
        
        <form action="buscar_libros.php" method="get" class="search-form">
            <input type="search" name="buscar_libros" id="search-box" placeholder="Buscar...">
            <label for="search-box" class="fas fa-search"></label>
            <input type="submit" name="search"  id="search-box" style="width:7rem;">
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="./favoritos.php" class="fas fa-heart">
            </a>
            <?php 
            if(!isset($_SESSION['username_usuario'])){
                echo"<div id='login-btn' class='fas fa-user'></div>";
            }else{
                echo"<a href='perfil.php' class='fas fa-user'></a>";
                echo"<a href='./user_area/logout.php' class='fas fa-right-from-bracket'></a>";
            }
            ?>
        </div>
    </div>
<!--ACCESOS RÁPIDOS INICIA-->
    <div class="header-2">
        <nav class="navbar">
            <a href="main.php">Inicio</a>
            <a href="catalog.php">Catálogo</a>
            <a href="#">Ingresos Recientes</a>
            <a href="#">Populares</a>
        </nav>
    </div>
<!--ACCESOS RÁPIDOS TERMINA-->
</header>
<!--ACCESOS RÁPIDOS (PARA CELULAR) INICIA-->
<nav class="bottom-navbar">
    <a href="main.php" class="fas fa-home"></a>
    <a href="catalog.php" class="fas fa-list"></a>
    <!-- <a href="" class="fas fa-tags"></a> -->
    <!-- <a href="" class="fas fa-wrench"></a> -->
    
</nav>
<!--ACCESOS RÁPIDOS (PARA CELULAR) TERMINA-->

<?php
include('./user_area/user_login.php');
?>


<!--HEADER TERMINA -->