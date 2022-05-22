<?php include_once('api.php');   include_once('conexion.php'); ?>

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
       <button type="submit" class="btn btn-danger">Insertar datos</button>
       <table id="tabla" class="display" style="width: 100%"><br><br>
       <thead>
        <tr>
          
          <th>ID</th>
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
        

        /*insertar_Datos($datos);*/
        
        $datos = retornar_Datos();

        for ($i = 0; $i < count($datos); $i++) {

            echo '<tr>';

            for ($j = 0; $j < (count($datos[$i])); $j++) {
            
                echo '<td>'.$datos[$i][$j].'</td>';
                
            }
            echo '<td>
            <a href="#edit_" .$datos["id_Usuario"]. >Editar</a>
            <a href="">Borrar</a>
            </td>';
            
          

            echo '</tr>';

            
            
        }

        include 'Edit/edit_delete_modal.php';
        ?>
      </tbody>
       </table>

    </div>  
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

    <script src="api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your JS code here  -->
    
  </body>
</html>