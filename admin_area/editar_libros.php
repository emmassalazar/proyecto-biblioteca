<?php
if(isset($_GET['editar_libros'])){
    $edit_id=$_GET['editar_libros'];

    $get_libro="SELECT * from `libros` WHERE id_libro=$edit_id";
    $result=mysqli_query($con,$get_libro);
    $row=mysqli_fetch_assoc($result);
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

            // $select_query = "SELECT * FROM `ordenalfabetico` WHERE az_id=$az_id";
            // $result_az= mysqli_query($con, $select_query);
            // while ($row = mysqli_fetch_array($result_az)) {
            //     $az_titulo = $row['az_titulo'];
            // }

            // $select_query = "SELECT * FROM `generos` WHERE genero_id=$genero_id";
            // $result_genero = mysqli_query($con, $select_query);
            // while ($row = mysqli_fetch_array($result_genero)) {
            //     $genero_titulo = $row['genero_titulo'];
            // }
            if(isset($_POST['edit_libro'])) {

                $titulo_libro=$_POST['titulo_libro'];
                $descripcion_libro=$_POST['descripcion_libro'];
                $autor_libro=$_POST['autor_libro'];
                $fecha_pub_libro=$_POST['fecha_pub_libro'];
                $leng_orig_libro=$_POST['leng_orig_libro'];
                $pais_libro=$_POST['pais_libro'];
            
            $update_data="UPDATE `libros` set titulo_libro='$titulo_libro', descripcion_libro='$descripcion_libro',autor_libro='$autor_libro',fecha_pub_libro='$fecha_pub_libro',leng_orig_libro='$leng_orig_libro',pais_libro='$pais_libro',id_libro=$edit_id, portada_libro='$portada_libro', pdf_libro='$pdf_libro', html_libro='$html_libro' WHERE id_libro=$edit_id";
            
        
                $result_query_update=mysqli_query($con,$update_data);
                if($result_query_update){
                    echo "<script>alert('Datos Actualizados con éxito.')</script>";
                    echo "<script>window.open('index.php','_self')</script>";

                }
            }
}

?>
<div class="libros-form-container">
    <form method="post" enctype="multipart/form-data" action="">
    <h3>Editar Libro</h3>
    <label for="titulo_libro">Título del Libro</label>
    <input type="text" name="titulo_libro" class="box" placeholder="Ingrese el título del libro" id="titulo_libro" autocomplete="off" value="<?php echo $titulo_libro ?>">
    <label for="descripcion_libro">Descripción del Libro</label>
    <textarea type="text" name="descripcion_libro" class="box" placeholder="Ingrese la descripción del libro" id="descripcion_libro" autocomplete="off"> <?php echo $descripcion_libro ?> </textarea>

    <!-- keywords -->
    <br><br><h2>Palabras Clave</h2>
    <label for="autor_libro">Autor del Libro</label>
    <input type="text" name="autor_libro" class="box" placeholder="Ingrese el autor del libro" id="autor_libro" autocomplete="off" value="<?php echo $autor_libro ?>">

    <label for="fecha_pub_libro">Fecha de publicación del Libro</label>
    <input type="text" name="fecha_pub_libro" class="box" placeholder="Ingrese la fecha de publicacion del libro" id="fecha_pub_libro" autocomplete="off" value="<?php echo $fecha_pub_libro ?>">

    <label for="leng_orig_libro">Lenguaje del Libro</label>
    <input type="text" name="leng_orig_libro" class="box" placeholder="Ingrese el lenguaje del libro" id="leng_orig_libro" autocomplete="off" value="<?php echo $leng_orig_libro ?>">

    <label for="pais_libro">País de origen del Libro</label>
    <input type="text" name="pais_libro" class="box" placeholder="Ingrese el país de origen del libro" id="pais_libro" autocomplete="off" value="<?php echo $pais_libro ?>">

    <!-- <label for="genero_libro">Género del libro</label>
    <div>
        <select name="genero_libro" id="genero_libro">
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
        <select name="az_libro" id="az_libro">
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
    </div> -->
    <br><br><h2>Archivos</h2>

    <label for="portada_libro">Portada del Libro</label>
    <input type="file" name="portada_libro" class="box"  id="portada_libro">

    <label for="pdf_libro">Pdf del libro</label>
    <input type="file" name="pdf_libro" class="box" id="pdf_libro">

    <label for="html_libro">HTML del libro</label>
    <input type="file" name="html_libro" class="box" id="html_libro">

    <input type="submit" value="Editar Libro" class="btn" name="edit_libro">
</form>
</div>