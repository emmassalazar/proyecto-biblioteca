<?php include('includes\connect.php');
include('./funciones/funciones_comunes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca | Página Principal</title>

    <!--INICIO LINKS-->
    <!-- CSS COSTUM LINK -->
    <link rel="stylesheet" href="style.css"> 
    <!-- CSS BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FIN LINKS-->
</head>
<body>

<!-- HEADER INICIA-->
<?php include("includes\header.php"); ?>
<!--HEADER TERMINA -->

<!--PORTADA INICIO EMPIEZA-->
<section class="inicio1" id="inicio1">

<div class="content">
    <h3>BIBLIOTECA</h3>
    <span>Los mejores libros, al alcance de todos.</span>
    <p>Los mejores libros, al alcance de todos.</p>
    <a href="catalog.php" class="btn">Explorar</a>
</div>

</section>
<!--PORTADA INICIO TERMINA-->

<!--SECCION CARACTERISTICAS INICIA-->
<section class="icons-container">
    <div class="icons">
        <i class="fas fa-piggy-bank"></i>
        <div class="content">
            <h3>Gratuita<h3>
                <p>Lee y descarga los libros que quieras sin costos.</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-comments"></i>
        <div class="content">
            <h3>Participa<h3>
                <p>Déjanos tus sugerencias para mejorar.</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-wrench"></i>
        <div class="content">
            <h3>Aprende<h3>
                <p>Accede a nuestra sección de libros técnicos.</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-heart"></i>
        <div class="content">
            <h3>Sin usuarios<h3>
                <p>No necesitas registrarte</p>
        </div>
    </div>
</section>
<!--SECCION CARACTERISTICAS TERMINA-->

<!-- SECCION POPULARES INICIA -->
<section class="populares" id="recientes">
<h1 class="heading"><span>LIBROS MÁS RECIENTES</span></h1>
<div class="populares-slider">
    <?php
        $select_query = "SELECT * FROM `libros` WHERE DATE_FORMAT(fecha_libro, '%Y/%m') = DATE_FORMAT(NOW(), '%Y/%m') ORDER BY RAND() LIMIT 0,6";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query)){
            $id_libro=$row['id_libro'];
            $titulo_libro=$row['titulo_libro'];
            $descripcion_libro=$row['descripcion_libro'];
            $autor_libro=$row['autor_libro'];
            $fecha_pub_libro=$row['fecha_pub_libro'];
            $genero_id=$row['genero_id'];
            $az_id=$row['az_id'];
            $portada_libro=$row['portada_libro'];
            $pdf_libro=$row['pdf_libro'];
            $fecha_libro=$row['fecha_libro'];
            $html_libro=$row['html_libro'];


            echo "<div class='box'>
            <div class='icons'>
            <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>

            <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
        </div>
        <div class='image'>
            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
        </div>
        <div class='content'>
            <h3>$autor_libro</h3>
            <div class='genre'>$titulo_libro</div>
            <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
        </div>
    </div>
    ";}
    ?> 
    

</div>
</section>
<!-- SECCION POPULARES TERMINA -->

<!--SECCION DE SUGERENCIAS INICIA-->
<section class="sugerencias">
<form action="">
    <h3>Envíanos tus sugerencias</h3>
    <input type="text" name="" placeholder="Envíanos tus sugerencias" id="" class="box">
    <input type="submit" value="Enviar" class="btn">
</form>
</section>
<!-- SECCION DE SUGERENCIAS TERMINA -->

<section class="populares" id="manuales">
<h1 class="heading"><span>MANUALES TÉCNICOS</span></h1>
<div class="populares-slider">
    <?php
        $select_query="SELECT * from `libros` WHERE genero_id=11 ORDER BY rand() LIMIT 0,6";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query)){
            $id_libro=$row['id_libro'];
            $titulo_libro=$row['titulo_libro'];
            $descripcion_libro=$row['descripcion_libro'];
            $autor_libro=$row['autor_libro'];
            $fecha_pub_libro=$row['fecha_pub_libro'];
            $genero_id=$row['genero_id'];
            $az_id=$row['az_id'];
            $portada_libro=$row['portada_libro'];
            $pdf_libro=$row['pdf_libro'];
            $fecha_libro=$row['fecha_libro'];
            $html_libro=$row['html_libro'];


            echo "<div class='box'>
            <div class='icons'>
            <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>

            <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
        </div>
        <div class='image'>
            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
        </div>
        <div class='content'>
            <h3>$autor_libro</h3>
            <div class='genre'>$titulo_libro</div>
            <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
        </div>
    </div>
    ";}
    ?> 
    

</div>
</section>
<!-- SECCION NUEVOS INGRESOS INICIA -->
<!-- <section class="nuevosingresos" id="nuevosingresos">

<h1 class="heading"><span>NUEVOS INGRESOS</span></h1>
<div class="swiper nuevosingresos-slider">
    <div class="swiper-wrapper"> 

    <?php
        // $select_query="Select * from `libros` WHERE genero_id=1 LIMIT 0,9";
        // $result_query=mysqli_query($con,$select_query);

        // while($row=mysqli_fetch_assoc($result_query)){
        //     $id_libro=$row['id_libro'];
        //     $titulo_libro=$row['titulo_libro'];
        //     $descripcion_libro=$row['descripcion_libro'];
        //     $autor_libro=$row['autor_libro'];
        //     $fecha_pub_libro=$row['fecha_pub_libro'];
        //     $genero_id=$row['genero_id'];
        //     $az_id=$row['az_id'];
        //     $portada_libro=$row['portada_libro'];
        //     $pdf_libro=$row['pdf_libro'];
        //     $fecha_libro=$row['fecha_libro'];

        //     echo "<div class='col-md-4 box'>
        //     <div class='image'>
        //         <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
        //     </div>
        //     <div class='content'>
        //         <h3>$titulo_libro</h3>
        //         <div class='genre'>$autor_libro</div>
        // </div>
        // </div>";}
    ?> 
    </div>

    
</div>

<div class="swiper nuevosingresos-slider">
    <div class="swiper-wrapper"> 
    <a href="#" class="swiper-slide box">
        <div class="image">
            <img src="https://www.tlbx.app/200-300.svg" alt="">
        </div>
        <div class="content">
            <h3>nuevo ingreso</h3>
            <div class="genre">lorem2</div>
        </div>
    </a>

    <a href="#" class="swiper-slide box">
        <div class="image">
            <img src="https://www.tlbx.app/200-300.svg" alt="">
        </div>
        <div class="content">
            <h3>nuevo ingreso</h3>
            <div class="genre">lorem2</div>
        </div>
    </a>

    <a href="#" class="swiper-slide box">
        <div class="image">
            <img src="https://www.tlbx.app/200-300.svg" alt="">
        </div>
        <div class="content">
            <h3>nuevo ingreso</h3>
            <div class="genre">lorem2</div>
        </div>
    </a>

    <a href="#" class="swiper-slide box">
        <div class="image">
            <img src="https://www.tlbx.app/200-300.svg" alt="">
        </div>
        <div class="content">
            <h3>nuevo ingreso</h3>
            <div class="genre">lorem2</div>
        </div>
    </a>

    <a href="#" class="swiper-slide box">
        <div class="image">
            <img src="https://www.tlbx.app/200-300.svg" alt="">
        </div>
        <div class="content">
            <h3>nuevo ingreso</h3>
            <div class="genre">lorem2</div>
        </div>
    </a>
    </div>

    
</div>

</div>

</section> -->
<!-- SECCION NUEVOS INGRESOS TERMINA -->

<!-- SECCION ANUNCIOS INICIA -->
<section class="anuncio">
    <div class="content">
        <h3>Anuncio</h3>
        <h1>¿Te gustan los cuentos?</h1>
        <p>Visita nuestro catálogo de libros de cuentos.</p>
        <a href="catalog.php?genero=2" class="btn">Visitar</a>
    </div>
    <div class="image">
        <img src="./static_images/biblioteca3.jpg" alt="">
    </div>

</section>
<!-- SECCION ANUNCIOS TERMINA -->


<!-- SECCION MANUALES TÉCNICOS INICIA -->
<section class="populares" id="populares">
<h1 class="heading"><span>LIBROS ARGENTINOS</span></h1>
<div class="populares-slider">
    <?php
        $select_query="SELECT * from `libros` WHERE pais_libro like 'Argentina' ORDER BY rand() LIMIT 0,6";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query)){
            $id_libro=$row['id_libro'];
            $titulo_libro=$row['titulo_libro'];
            $descripcion_libro=$row['descripcion_libro'];
            $autor_libro=$row['autor_libro'];
            $fecha_pub_libro=$row['fecha_pub_libro'];
            $genero_id=$row['genero_id'];
            $az_id=$row['az_id'];
            $portada_libro=$row['portada_libro'];
            $pdf_libro=$row['pdf_libro'];
            $fecha_libro=$row['fecha_libro'];
            $html_libro=$row['html_libro'];


            echo "<div class='box'>
            <div class='icons'>
            <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>

            <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
        </div>
        <div class='image'>
            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
        </div>
        <div class='content'>
            <h3>$autor_libro</h3>
            <div class='genre'>$titulo_libro</div>
            <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
        </div>
    </div>
    ";}
    ?> 
    

</div>
</section>
<!-- SECCION MANUALES TÉCNICOS TERMINA -->

<!-- seccion reseñas INICIA-->

<!-- seccion reseñas TERMINA -->



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
<!-- SCRIPTS TERMINAN -->

</body>
</html>