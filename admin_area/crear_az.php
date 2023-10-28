<style>
.form-container{
display: flex;
align-items: center;
justify-content: center;
}
.form-container form{
width: 40rem;
padding:2rem;
border-radius: .5rem;
margin:2rem;
}
.form-container form h2{
font-size: 2.5rem;
text-transform: uppercase;
color:var(--black);
text-align: center;
}
.form-container form span{
display:block;
font-size: 1.5rem;
padding-top:1rem;
}
.form-container form .box, .form-container select{
border:var(--border);
border-radius: .5rem;
padding: 1rem 1.2rem;
color:var(--black);
text-transform: none;
font-size: 1.5rem;

}

.btn{
    margin-top: 1rem;
    margin-bottom: 1rem;
    display: inline-block;
    padding: .9rem 3rem;
    border-radius:.5rem;
    color: #fff;
    background: var(--maincolor);
    font-size: 1.7rem;
    cursor: pointer;
    font-weight: 500;
    width: 100%;
}
.btn:hover{
    background: var(--dark-color);
    color:#fff;
}

</style>

<?php 
if(isset($_POST['cargar_az'])){
    $az_titulo=$_POST['az_titulo'];

    $select_query="Select * from `ordenalfabetico` where az_titulo='$az_titulo'";
    $result_select=mysqli_query($con,$select_query);
    $num=mysqli_num_rows($result_select);
    if($num>0){
        echo "<script>alert('No se pudo completar. Ya existe dentro del sistema.')</script>";

    }else{

    $insert_query="insert into `ordenalfabetico`(az_titulo) values ('$az_titulo')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Se cargó exitosamente.')</script>";
    }
}}
?>
<div class="form-container">
<form action="" method="post" class="mb-2">
<h2 class="text-center">Cargar Categoría Orden Alfabético</h2>
    <div class="input-group w-90 mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control box" name="az_titulo" placeholder="Subir categoria (Ej: A)." aria-label="az">
    </div>
    <input type="submit" class="btn" name="cargar_az" value="Cargar">
</div>



</form>