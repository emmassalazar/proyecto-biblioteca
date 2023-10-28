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
<title>Biblioteca | Detalles del Libro</title>

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

<!-- DETALLES LIBRO INICIA -->
<?php
detalles_libro();
favoritos_save();
?>
<!-- DETALLES LIBRO TERMINA -->

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