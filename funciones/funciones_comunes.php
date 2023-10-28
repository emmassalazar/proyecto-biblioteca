<?php 
// include('includes\connect.php');

function mostrarlibros(){
    global $con;
    // condition to check isset or not
    if(!isset($_GET['genero'])){
        if(!isset($_GET['az'])){
            $select_query="SELECT * FROM `libros` ORDER BY rand()";
            $result_query=mysqli_query($con, $select_query);
            
            while($row=mysqli_fetch_assoc($result_query)){
                $id_libro=$row['id_libro'];
                $titulo_libro=$row['titulo_libro'];
                $descripcion_libro=$row['descripcion_libro'];
                $autor_libro=$row['autor_libro'];
                $fecha_pub_libro=$row['fecha_pub_libro'];
                $pais_libro=$row['pais_libro'];
                $genero_id=$row['genero_id'];
                $az_id=$row['az_id'];
                $portada_libro=$row['portada_libro'];
                $pdf_libro=$row['pdf_libro'];
                $fecha_libro=$row['fecha_libro'];
                $html_libro=$row['html_libro'];

            if(!isset($_SESSION['username_usuario'])){
                echo "<div class='col-md-4 box'>
                    <div class='image'>
                        <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                    </div>
                    <div class='content'>
                        <h3>$autor_libro</h3>
                        <div class='genre'>$titulo_libro</div>
                        <div class='icons'>
                            <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a><br>
                            <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                        </div>
                    </div>
                </div>";
            }else{
                echo "<div class='col-md-4 box'>
                    <div class='image'>
                        <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                    </div>
                    <div class='content'>
                        <h3>$autor_libro</h3>
                        <div class='genre'>$titulo_libro</div>
                        <div class='icons'>
                            <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>
                            <a href='catalog.php?add_to_favoritos=$id_libro' class='fas fa-heart'></a>
                            <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
                            <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                        </div>
                    </div>
                </div>";
            }
        }
    }
}
}
function libros_generos_especificos(){
    global $con;
    // condition to check isset or not
    if(isset($_GET['genero'])){
        $genero_id=$_GET['genero'];
            $select_query="SELECT * FROM `libros` WHERE genero_id=$genero_id";
            $result_query=mysqli_query($con, $select_query);
            
            $num_rows=mysqli_num_rows( $result_query);
            if($num_rows==0){
                echo "<h1>Lo sentimos, aún no hay libros en esta categoría.</h1>";
            }

            while($row=mysqli_fetch_assoc($result_query)){
                $id_libro=$row['id_libro'];
                $titulo_libro=$row['titulo_libro'];
                $descripcion_libro=$row['descripcion_libro'];
                $autor_libro=$row['autor_libro'];
                $pais_libro=$row['pais_libro'];
                $fecha_pub_libro=$row['fecha_pub_libro'];
                $genero_id=$row['genero_id'];
                $az_id=$row['az_id'];
                $portada_libro=$row['portada_libro'];
                $pdf_libro=$row['pdf_libro'];
                $fecha_libro=$row['fecha_libro'];
                $html_libro=$row['html_libro'];

                if(!isset($_SESSION['username_usuario'])){
                    echo "<div class='col-md-4 box'>
                        <div class='image'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                        </div>
                        <div class='content'>
                            <h3>$autor_libro</h3>
                            <div class='genre'>$titulo_libro</div>
                            <div class='icons'>
                                <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a><br>
                                <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                            </div>
                        </div>
                    </div>";
                }else{
                    echo "<div class='col-md-4 box'>
                        <div class='image'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                        </div>
                        <div class='content'>
                            <h3>$autor_libro</h3>
                            <div class='genre'>$titulo_libro</div>
                            <div class='icons'>
                                <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>
                                <a href='catalog.php?add_to_favoritos=$id_libro' class='fas fa-heart'></a>
                                <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
                                <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                            </div>
                        </div>
                    </div>";
                }
}}}

function libros_az_especificos(){
    global $con;
    // condition to check isset or not
    if(isset($_GET['az'])){
        $az_id=$_GET['az'];
            $select_query="SELECT * FROM `libros` WHERE az_id=$az_id";
            $result_query=mysqli_query($con, $select_query);
            
            $num_rows=mysqli_num_rows( $result_query);
            if($num_rows==0){
                echo "<h1>Lo sentimos, aún no hay libros en esta categoría.</h1>";
            }

            while($row=mysqli_fetch_assoc($result_query)){
                $id_libro=$row['id_libro'];
                $titulo_libro=$row['titulo_libro'];
                $descripcion_libro=$row['descripcion_libro'];
                $autor_libro=$row['autor_libro'];
                $fecha_pub_libro=$row['fecha_pub_libro'];
                $pais_libro=$row['pais_libro'];
                $genero_id=$row['genero_id'];
                $az_id=$row['az_id'];
                $portada_libro=$row['portada_libro'];
                $pdf_libro=$row['pdf_libro'];
                $fecha_libro=$row['fecha_libro'];
                $html_libro=$row['html_libro'];
                if(!isset($_SESSION['username_usuario'])){
                    echo "<div class='col-md-4 box'>
                        <div class='image'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                        </div>
                        <div class='content'>
                            <h3>$autor_libro</h3>
                            <div class='genre'>$titulo_libro</div>
                            <div class='icons'>
                                <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a><br>
                                <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                            </div>
                        </div>
                    </div>";
                }else{
                    echo "<div class='col-md-4 box'>
                        <div class='image'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                        </div>
                        <div class='content'>
                            <h3>$autor_libro</h3>
                            <div class='genre'>$titulo_libro</div>
                            <div class='icons'>
                                <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>
                                <a href='catalog.php?add_to_favoritos=$id_libro' class='fas fa-heart'></a>
                                <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
                                <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                            </div>
                        </div>
                    </div>";
                }
}}}


function mostrargeneros(){
    global $con;
    $select_genero="SELECT * FROM `generos`";
    $result_genero=mysqli_query($con,$select_genero);
    while($row_data=mysqli_fetch_assoc($result_genero)){
        $genero_titulo=$row_data['genero_titulo'];
        $genero_id=$row_data['genero_id'];
        echo "<li class='nav-item'>
        <a href='catalog.php?genero=$genero_id' class='nav-link'>$genero_titulo</a>
    </li>";
    }
}

function mostraraz(){
    global $con;
$select_az="SELECT * FROM `ordenalfabetico`";
$result_az=mysqli_query($con,$select_az);
while($row_data=mysqli_fetch_assoc($result_az)){
    $az_titulo=$row_data['az_titulo'];
    $az_id=$row_data['az_id'];
    echo "<li class='nav-item'>
    <a href='catalog.php?az=$az_id' class='nav-link'>$az_titulo</a>
</li>";
}
}

//barra busqueda de libros
function buscar_libros(){
    global $con;
    if(isset($_GET['search'])){
        $buscar_libros=$_GET['buscar_libros'];
            $search_query="SELECT * FROM `libros` WHERE autor_libro LIKE '%$buscar_libros%' OR fecha_pub_libro LIKE '%$buscar_libros%' OR leng_orig_libro LIKE '%$buscar_libros%' OR titulo_libro LIKE '%$buscar_libros%' OR pais_libro LIKE '%$buscar_libros%'";

            $result_query=mysqli_query($con, $search_query);
            
            while($row=mysqli_fetch_assoc($result_query)){
                $id_libro=$row['id_libro'];
                $titulo_libro=$row['titulo_libro'];
                $descripcion_libro=$row['descripcion_libro'];
                $autor_libro=$row['autor_libro'];
                $fecha_pub_libro=$row['fecha_pub_libro'];
                $pais_libro=$row['pais_libro'];
                $leng_orig_libro=$row['leng_orig_libro'];
                $genero_id=$row['genero_id'];
                $az_id=$row['az_id'];
                $portada_libro=$row['portada_libro'];
                $pdf_libro=$row['pdf_libro'];
                $fecha_libro=$row['fecha_libro'];
                $html_libro=$row['html_libro'];
                
                if(!isset($_SESSION['username_usuario'])){
                    echo "<div class='col-md-4 box'>
                        <div class='image'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                        </div>
                        <div class='content'>
                            <h3>$autor_libro</h3>
                            <div class='genre'>$titulo_libro</div>
                            <div class='icons'>
                                <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a><br>
                                <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                            </div>
                        </div>
                    </div>";
                }else{
                    echo "<div class='col-md-4 box'>
                        <div class='image'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                        </div>
                        <div class='content'>
                            <h3>$autor_libro</h3>
                            <div class='genre'>$titulo_libro</div>
                            <div class='icons'>
                                <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>
                                <a href='catalog.php?add_to_favoritos=$id_libro' class='fas fa-heart'></a>
                                <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
                                <a href='detalles_libro.php?id_libro=$id_libro' class='btn'>Detalles</a>
                            </div>
                        </div>
                    </div>";
                }

}}}

// detalles libro
function detalles_libro(){
    global $con;
    if(isset($_GET['id_libro'])){
        $id_libro=$_GET['id_libro'];
        $select_query="SELECT * FROM `libros` WHERE id_libro=$id_libro";
        $result_query=mysqli_query($con, $select_query);
            
        while($row=mysqli_fetch_assoc($result_query)){
                $id_libro=$row['id_libro'];
                $titulo_libro=$row['titulo_libro'];
                $descripcion_libro=$row['descripcion_libro'];
                $autor_libro=$row['autor_libro'];
                $fecha_pub_libro=$row['fecha_pub_libro'];
                $pais_libro=$row['pais_libro'];
                $leng_orig_libro=$row['leng_orig_libro'];
                $genero_id=$row['genero_id'];
                $portada_libro=$row['portada_libro'];
                $pdf_libro=$row['pdf_libro'];
                $fecha_libro=$row['fecha_libro'];

                $html_libro=$row['html_libro'];
                
                $genero_id= $select_query="SELECT * FROM `generos` WHERE genero_id=$genero_id";
                $result_query=mysqli_query($con, $select_query);
                while ($row=mysqli_fetch_assoc($result_query)){
                $genero_titulo=$row['genero_titulo'];

                if(!isset($_SESSION['username_usuario'])){
                    echo "<section class='inicio2' id='inicio2'>
                    <div class='heading'>
                        <span>$titulo_libro</span>
                    </div>
                </section>
                <section class='detalles row'>
                <div class='col-md-4'>
                    <div class='row detalles-portada'>
                        <!-- portada -->
                        <div class='box'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                            <div class='icons'>
                                <span>$autor_libro</span>
                                <br><br>
                                        <span>Leer en línea: <span>
                                        <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>
                                    </div>
                        </div>
                    </div>
                </div>";
                }else{
                    echo "<section class='inicio2' id='inicio2'>
                    <div class='heading'>
                        <span>$titulo_libro</span>
                    </div>
                </section>
                <section class='detalles row'>
                <div class='col-md-4'>
                    <div class='row detalles-portada'>
                        <!-- portada -->
                        <div class='box'>
                            <img src='./admin_area/portadas_libros/$portada_libro' alt=''>
                            <div class='icons'>
                                <span>$autor_libro</span>
                                <br><br>
                                        <span>Leer en línea: <span>
                                        <a href='./admin_area/htmls_libros/$html_libro' class='fas fa-book-open-reader'></a>
                                        <br>
                                        <span>Marcar favorito: <span>
                                        <a href='catalog.php?add_to_favoritos=$id_libro' class='fas fa-heart'></a>
                                        <br>
                                        <span>Descargar PDF: <span>
                                        <a href='./admin_area/pdfs_libros/$pdf_libro' download='$pdf_libro' class='fas fa-download'></a>
                                    </div>
                        </div>
                    </div>
                </div>
                ";}
                
            echo" <div class='col-md-8 p-0 detalles-tabla'>
                <table class='tabla-datos-libro'>
                                <tr>
                                    <th scope='col'>Descripción</th>
                                    <td>$descripcion_libro</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Año de Publicación</th>
                                    <td>$fecha_pub_libro</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Idioma</th>
                                    <td>$leng_orig_libro</td>
                                </tr>
                                <tr>
                                    <th scope='col'>País de Origen</th>
                                    <td>$pais_libro</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Género Literario</th>
                                    <td>$genero_titulo</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Disponible en la página desde...</th>
                                    <td>$fecha_libro</td>
                                </tr>
                        </table>
                </div>
                <br><br><br>
            <!--<iframe src='./admin_area/pdfs_libros/$pdf_libro' width='800' height='1000'></iframe>
            <iframe src='./admin_area/htmls_libros/$html_libro'  width='800' height='1000'></iframe>-->
            </section>";
}}}}


// get ip

function getIPAddress(){
    // wheter ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $get_ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    // whether ip is from the remote address
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $get_ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // wheter ip is from remote address
    else{
        $get_ip=$_SERVER['REMOTE_ADDR'];
    }
    return $get_ip;
}
// $get_ip=getIPAddress();
// echo 'user Real ip Address - '.$get_ip;

function favoritos_save(){
    if(isset($_GET['add_to_favoritos'])){
        global $con;
        $get_ip=getIPAddress();
        $get_libro_id=$_GET['add_to_favoritos'];
        $select_query="SELECT * FROM `favoritos` WHERE direccion_ip='$get_ip' AND id_libro=$get_libro_id";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows>0){
            echo "<script>alert('Este Libro ya fue guardado previamente.')</script>";
            echo "<script>window.open('catalog.php','_self')</script>";
        }else{
            $insert_query="INSERT into `favoritos`(id_libro,direccion_ip) values ($get_libro_id,'$get_ip')";
            $result_query=mysqli_query($con,$insert_query);
            echo "<script>alert('El libro ha sido añadido a favoritos con éxito.')</script>";
            echo "<script>window.open('catalog.php','_self')</script>";
            
        }
    }
}

// function to get favoritos number
function favoritos_acum(){
    if(isset($_GET['add_to_favoritos'])){
        global $con;
        $get_ip=getIPAddress();
        $select_query="SELECT * FROM `favoritos` WHERE direccion_ip='$get_ip'";
        $result_query=mysqli_query($con,$select_query);
        $count_fav_items=mysqli_num_rows($result_query);
    }else{
        global $con;
        $get_ip=getIPAddress();
        $select_query="SELECT * FROM `favoritos` WHERE direccion_ip='$get_ip'";
        $result_query=mysqli_query($con,$select_query);
        $count_fav_items=mysqli_num_rows($result_query);
        }
    echo $count_fav_items;
    }



function favoritos_item(){
    global $con;
    $get_ip = getIPAddress();
    $favoritos_query = "SELECT * from `favoritos` where direccion_ip='$get_ip' ";
    $result_query = mysqli_query($con, $favoritos_query);
    $result_count=mysqli_num_rows($result_query);
    if($result_count> 0){
        echo "<thead>
        <tr>
            <th>Titulo libro</th>
            <th>Portada</th>
            <th>Acceso Directo</th>
            <th>Leer Online</th>
            <th>Seleccionar</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>";
        while ($favoritos_row = mysqli_fetch_assoc($result_query)) {
            $id_libro = $favoritos_row["id_libro"];
            $select_libro = "SELECT * from `libros` where id_libro='$id_libro'";
            $result_libro = mysqli_query($con, $select_libro);
            while ($libro_row = mysqli_fetch_assoc($result_libro)) {
                $id_libro = $libro_row['id_libro'];
                $titulo_libro = $libro_row['titulo_libro'];
                $genero_id = $libro_row['genero_id'];
                $portada_libro = $libro_row['portada_libro'];
                $pdf_libro = $libro_row['pdf_libro'];
                $fecha_libro = $libro_row['fecha_libro'];
                $html_libro = $libro_row['html_libro'];

                $genero_id = $libro_row['genero_id'];
                $select_query = "SELECT * FROM `generos` WHERE genero_id=$genero_id";
                $result_genero = mysqli_query($con, $select_query);
                while ($genero_row = mysqli_fetch_assoc($result_genero)) {
                    $genero_titulo = $genero_row['genero_titulo'];
                }
            echo "
            <tr>
            <td>$titulo_libro</td>
            <td class='image'><img src='./admin_area/portadas_libros/$portada_libro' alt='' ></td>
            <td><a href='detalles_libro.php?id_libro=$id_libro'><i class='fas fa-eye'></i></a></td>
            <td><a href='./admin_area/htmls_libros/$html_libro'><i class='fas fa-book-open-reader'></i></a></td>
            <form method='post' action=''>
            <td><input type='checkbox' name='eliminar_libro[]' value='$id_libro'></td>
            <td><input type='submit' value='Eliminar de Favoritos' class='btn' name='eliminar_de_favoritos'>
            </td> 
        </form>
        <tr>
        </tbody>";
            }
        }
    }else{
        echo "<h2 style='font-size:5rem; color:#52796F;'>No hay Favoritos.<h2>";
    }
}


// function to remove books from favourite
function eliminar_favoritos(){
    global $con;
    if(isset($_POST['eliminar_de_favoritos'])){
        foreach($_POST['eliminar_libro'] as $remove_id){
            echo $remove_id;
            $delete_query="DELETE from `favoritos` where id_libro=$remove_id";
            $run_delete=mysqli_query($con, $delete_query);
            if($run_delete){
                echo"<script>alert('Eliminado de Favoritos Exitosamente')</script>";
                echo"<script>window.open('favoritos.php','_self')</script>";
            }
        }
    }
}

?>