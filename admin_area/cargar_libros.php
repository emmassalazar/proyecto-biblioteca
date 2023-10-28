<?php
if (isset($_POST['cargar_libro'])){
    $titulo_libro=$_POST['titulo_libro'];
    $descripcion_libro=$_POST['descripcion_libro'];
    $autor_libro=$_POST['autor_libro'];
    $pais_libro=$_POST['pais_libro'];
    $fecha_pub_libro=$_POST['fecha_pub_libro'];
    $leng_orig_libro=$_POST['leng_orig_libro'];
    $genero_libro=$_POST['genero_libro'];
    $az_libro=$_POST['az_libro'];

    // accessing img
    $portada_libro=$_FILES['portada_libro']['name'];
    $temp_portada_libro=$_FILES['portada_libro']['tmp_name'];
    // accessing pdf
    $pdf_libro=$_FILES['pdf_libro']['name'];
    $temp_pdf_libro=$_FILES['pdf_libro']['tmp_name'];
    //accessing html
    $html_libro=$_FILES['html_libro']['name'];
    $temp_html_libro=$_FILES['html_libro']['tmp_name'];

    //checking empty condition
    if($titulo_libro=='' or $descripcion_libro=='' or $autor_libro=='' or $fecha_pub_libro=='' or $leng_orig_libro=='' or $genero_libro=='' or $az_libro=='' or $portada_libro=='' or $pdf_libro==''){
        echo "<script>alert('Por favor complete todos los campos.') </script>";
        exit();
    }else{
        move_uploaded_file($temp_portada_libro,"./portadas_libros/$portada_libro");
        move_uploaded_file($temp_pdf_libro,"./pdfs_libros/$pdf_libro");
        move_uploaded_file($temp_html_libro,"./htmls_libros/$html_libro");

        // insert query
        $cargar_libro="insert into `libros` (titulo_libro,descripcion_libro,autor_libro,fecha_pub_libro,leng_orig_libro,genero_id,	az_id,	portada_libro,pdf_libro,fecha_libro) values('$titulo_libro','$descripcion_libro','$autor_libro','$fecha_pub_libro','$leng_orig_libro','$genero_libro','$az_libro','$portada_libro','$pdf_libro',NOW())";
        $result_query=mysqli_query($con,$cargar_libro);
        if($result_query){
            echo "<script>alert('Libro Cargado con éxito.')</script>";
        }
    }
}
?>

<div class="libros-form-container">
    <form method="post" enctype="multipart/form-data" action="">
    <h3>Cargar Libro</h3>
    <label for="titulo_libro">Título del Libro</label>
    <input type="text" name="titulo_libro" class="box" placeholder="Ingrese el título del libro" id="titulo_libro" autocomplete="off" required="required">

    <label for="descripcion_libro">Descripción del Libro</label>
    <textarea type="" name="descripcion_libro" class="box" placeholder="Ingrese la descripción del libro" id="descripcion_libro" autocomplete="off" required="required"></textarea>

    <!-- keywords -->
    <br><br><h2>Palabras Clave</h2>
    <label for="autor_libro">Autor del Libro</label>
    <input type="" name="autor_libro" class="box" placeholder="Ingrese el autor del libro" id="autor_libro" autocomplete="off" required="required">

    <label for="fecha_pub_libro">Fecha de publicación del Libro</label>
    <input type="text" name="fecha_pub_libro" class="box" placeholder="Ingrese la fecha de publicacion del libro" id="fecha_pub_libro" autocomplete="off" required="required">

    <label for="leng_orig_libro">Lenguaje del Libro</label>
    <input type="text" name="leng_orig_libro" class="box" placeholder="Ingrese el lenguaje del libro" id="leng_orig_libro" autocomplete="off" required="required">

    <label for="pais_libro">País de origen del Libro</label>
    <input type="text" name="pais_libro" class="box" placeholder="Ingrese el país de origen del libro" id="pais_libro" autocomplete="off" required="required">

    <label for="genero_libro">Género del libro</label>
    <div>
        <select name="genero_libro" id="genero_libro" required="required">
            <option value="">Seleccione un género literatio</option>
            <?php 
            $select_query="Select * from `generos`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $genero_title=$row['genero_titulo'];
                $genero_id=$row['genero_id'];
                echo "<option value='$genero_id'>$genero_title</option>";
            }
            ?>
        </select>
    </div>

    <label for="az_libro">Inicial alfabetica del libro</label>
    <div>
        <select name="az_libro" id="az_libro" required="required">
            <option value="">Seleccione la inicial alfabetica del libro</option>
            <?php 
            $select_query="Select * from `ordenalfabetico`";
            $result_query=mysqli_query($con,$select_query);
            while($row=mysqli_fetch_assoc($result_query)){
                $az_title=$row['az_titulo'];
                $az_id=$row['az_id'];
                echo "<option value='$az_id'>$az_title</option>";
            }
            ?>
        </select>
    </div>
    <br><br><h2>Archivos</h2>

    <label for="portada_libro">Portada del Libro</label>
    <input type="file" name="portada_libro" class="box"  id="portada_libro" required="required">

    <label for="pdf_libro">Pdf del libro</label>
    <input type="file" name="pdf_libro" class="box" id="pdf_libro" required="required">

    <label for="html_libro">HTML del libro</label>
    <input type="file" name="html_libro" class="box" id="html_libro" required="required">

<!-- Leer Online-->
    <input type="submit" value="Cargar Libro" class="btn" name="cargar_libro">
</form>
</div> 