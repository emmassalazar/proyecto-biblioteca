<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblioteca | Todos los Libros</title>

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

<!-- INICIO 2 EMPIEZA -->
<section class="inicio2" id="inicio2">
    <div class="heading">
        <span>Todos los Libros</span>
    </div>
</section>
<!-- INICIO 2 TERMINA -->

    <section class='container todos-libros'>
        <div class='row'>
        <table class='table table-bordered todos-libros-table'>
        <thead>
        <tr>
            <th>ID del Libro</th>
            <th>Titulo</th>
            <th>Portada</th>
            <th>Descripción</th>
            <th>Autor</th>
            <th>Fecha de publicación</th>
            <th>Idioma</th>
            <th>País de origen</th>
            <th>Género </th>
            <th>Inicial</th>
            <th>Pdf</th>
            <th>Html</th>
            <th>Disponible en la página desde:</th>

            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $get_libros="SELECT * from `libros`";
        $result=mysqli_query($con,$get_libros);
        while($row=mysqli_fetch_array($result)){
            $id_libro=$row['id_libro'];
            $titulo_libro=$row['titulo_libro'];
            $descripcion_libro=$row['descripcion_libro'];
            $autor_libro=$row['autor_libro'];
            $fecha_pub_libro=$row['fecha_pub_libro'];
            $leng_orig_libro=$row['leng_orig_libro'];
            $genero_id=$row['genero_id'];
            $az_id=$row['az_id'];
            $fecha_libro=$row['fecha_libro'];
            $pais_libro=$row['pais_libro'];

            $portada_libro=$row['portada_libro'];
            $pdf_libro=$row['pdf_libro'];
            $html_libro=$row['html_libro'];

            $select_query = "SELECT * FROM `ordenalfabetico` WHERE az_id=$az_id";
            $result_az= mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_array($result_az)) {
                $az_titulo = $row['az_titulo'];
            }

            $select_query = "SELECT * FROM `generos` WHERE genero_id=$genero_id";
            $result_genero = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_array($result_genero)) {
                $genero_titulo = $row['genero_titulo'];
            }

            echo "<tr>
            <td>$id_libro</td>
            <td>$titulo_libro</td>
            <td class='image'><img src='../admin_area/portadas_libros/$portada_libro' alt=''></td>
            <td>$descripcion_libro</td>
            <td>$autor_libro</td>
            <td>$fecha_pub_libro</td>
            <td>$leng_orig_libro</td>
            <td>$pais_libro</td>
            <td>$genero_titulo</td>
            <td>$az_titulo</td>
            <td><a href='../admin_area/pdfs_libros/$pdf_libro'><i class='fas fa-book'></i></a></td>
            <td><a href='../admin_area/htmls_libros/$html_libro'><i class='fas fa-book-open-reader'></i></a></td>

            <td>$fecha_libro</td>

            <td><a href='index.php?editar_libros=$id_libro'><i class='fas fa-pen-to-square'></i></a>
            </td> 
            <td><a href='#'><i class='fas fa-trash'></i></a>
            </td> 
        <tr>";

        }
        
        ?>
        
        </tbody>
    </table>
        </div>
    </section>


<!-- FAVORITOS TERMINA -->




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
