<section class="inicio2" id="inicio2">
    <div class="heading">
        <span>Ver Orden Alfabético</span>
    </div>
</section>
<!-- INICIO 2 TERMINA -->

    <section class='container todos-libros'>
        <div class='row'>
        <table class='table table-bordered todos-libros-table'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $get_az="SELECT * from `ordenalfabetico`";
        $result=mysqli_query($con,$get_az);
        while($row=mysqli_fetch_array($result)){
            $az_id=$row['az_id'];
            $az_titulo=$row['az_titulo'];

            echo "<tr>
            <td>$az_id</td>
            <td>$az_titulo</td>

            <td><a href='#'><i class='fas fa-pen-to-square'></i></a>
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