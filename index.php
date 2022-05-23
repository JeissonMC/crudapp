<?php include_once('api.php');   include_once('conexion.php'); 


$conn = mysqli_connect("localhost","root","","crudapi");

?>

<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
      integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />


    <!-- ✅ load jQuery ✅ -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- ✅ load DataTables ✅ -->
  
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
      integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
     rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
     crossorigin="anonymous">

  </head>

  <body>
    <!-- 👇️ HTML for Table  -->
<style>
    .portada{
    font-size: 50px;
    background-color:#F5DBDB;
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
}
</style>
    
   <h1 class="portada" id="portada">CRUD API PHP Y MYSQL</h1> 
    <div class="container">
       <button type="submit" class="btn btn-danger" onclick="insertar_Datos($datos)">Insertar datos</button>
       <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>
       <table id="tabla" class="display" style="width: 100%"><br><br>
       <thead>
        <tr>
          
          
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Genero</th>
          <th>Ciudad</th>
          <th>Estado</th>
          <th>Pais</th>
          <th>Acciones</th>
          
          
      </thead>
      <tbody>
        <?php 
        
        include_once 'conexion.php';
        
        $query = "SELECT * FROM usuario";
        $result_tasks = mysqli_query($conn, $query);    

        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
        <tr>
          <td><?php echo $row['Nombre']; ?></td>
          <td><?php echo $row['Apellidos']; ?></td>
          <td><?php echo $row['Genero']; ?></td>
          <td><?php echo $row['Ciudad']; ?></td>
          <td><?php echo $row['Estado']; ?></td>
          <td><?php echo $row['Pais']; ?></td>
          <td>
            <a href="editar.php?Id_Usuario=<?php echo $row['Id_Usuario']?>" class="btn btn-success">Editar</a>
            <a href="delete.php?Id_Usuario=<?php echo $row['Id_Usuario']?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
        <?php } ?>
       
            
        
        
      </tbody>
       </table>

    </div>  
<!-- Edit -->

    
    <script>
      $(document).ready(function () {

        $("[name=saludar]").click(function(){

            var buttonName = event.target.name;
            alert(buttonName);
            var str = $("#").text();
            alert(str);


        });

      $('#tabla').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        }
        
      }
      );
    });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
crossorigin="anonymous">
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">

    </script>

    <!-- Your JS code here  -->
    
  </body>
</html>