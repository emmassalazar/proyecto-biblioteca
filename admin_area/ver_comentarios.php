<section class="inicio2" id="inicio2">
    <div class="heading">
        <span>Ver Comentarios</span>
    </div>
</section>
<!-- INICIO 2 TERMINA -->

    <section class='container todos-libros'>
        <div class='row'>
        <table class='table table-bordered todos-libros-table'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Comentario</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $get_comentarios="SELECT * from `comentarios`";
        $result=mysqli_query($con,$get_comentarios);
        while($row=mysqli_fetch_array($result)){
            $id_comentarios=$row['id_comentarios'];
            $cont_comentario=$row['cont_comentario'];

            echo "<tr>
            <td>$id_comentarios</td>
            <td>$cont_comentario</td>

            <td><a href='#'><i class='fas fa-trash'></i></a>
            </td> 
        <tr>";

        }
        
        ?>
        
        </tbody>
    </table>
        </div>
    </section>