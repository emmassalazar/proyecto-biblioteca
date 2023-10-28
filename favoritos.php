<!-- connect file -->
<?php
include('includes/connect.php');
include('funciones/funciones_comunes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblioteca | Libros Favoritos</title>

<!--INICIO LINKS-->
    <!-- CSS COSTUM LINK -->
        <link rel="stylesheet" href="style.css">
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
<?php include("includes\header.php"); ?>
<!--HEADER TERMINA -->

<!-- INICIO 2 EMPIEZA -->
<section class="inicio2" id="inicio2">
    <div class="heading">
        <span>Favoritos</span>
    </div>
</section>
<!-- INICIO 2 TERMINA -->
<?php 
if(!isset($_SESSION['username_usuario'])){
        echo "<section class='container favoritos'> <h2 style='font-size:5rem; color:#52796F; text-align:center;'>Regístrese para empezar a guardar favoritos.<h2>";
        // echo"<a href='.\user_area\user_login.php' style='font-size:4rem;'>CLick aquí.</a></section>";
        
}else{
    echo"
    <section class='container favoritos'>
        <div class='row'>
        <table class='table table-bordered favoritos-table'>";
        favoritos_item();
    echo"</table>
        </div>
    </section>";
}

?>

<!-- FAVORITOS TERMINA -->


<!-- FOOTER INICIA -->
<?php include("./includes/footer.php"); 
    eliminar_favoritos();

?>
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