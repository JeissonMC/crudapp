<!doctype html>
<html lang="es">

<?php

session_start();   
    
    $conn = mysqli_connect("localhost","root","","crudapi");

if  (isset($_GET['Id_Usuario'])) {
  $id = $_GET['Id_Usuario'];
  $query = "SELECT * FROM usuario WHERE Id_Usuario=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellidos'];
    $Genero = $row['Genero'];
    $Ciudad = $row['Ciudad'];
    $Estado = $row['Estado'];
    $Pais = $row['Pais'];

    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['Id_Usuario'];
  $Nombre= $_POST['Nombre'];
  $Apellido = $_POST['Apellidos'];
  $Genero = $_POST['Genero'];
  $Ciudad = $_POST['Ciudad'];
  $Estado = $_POST['Estado'];
  $Pais = $_POST['Pais'];


  $query = "UPDATE usuario set Nombre = '$Nombre', Apellidos = '$Apellido', Genero = '$Genero', Ciudad = '$Ciudad', Estado = '$Estado', Pais = '$Pais' WHERE Id_Usuario=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Se actualizo la tarea';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');
}

        
    
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Bootstrap demo</title>
</head>

<body>
    <style>
    .portada {
        font-size: 50px;
        background-color: #F5DBDB;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
    }

    .container {
        width: 60%;
    }
    </style>

    <div class="container">
        <h1 class="portada" id="portada">Editar usuario</h1>
        <div class="mb-3">
            <form action="editar.php?Id_Usuario=<?php echo $_GET['Id_Usuario']; ?>" method="POST">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" value="<?php echo $Nombre; ?>">
                </div>
                <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="form-label">Apelldo</label>
                 <input type="text" class="form-control" name="Apellidos" value="<?php echo $Apellido; ?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Genero</label>
                <input type="text" class="form-control"  name="Genero" value="<?php echo $Genero; ?>" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ciudad</label>
                <input type="text" class="form-control"  name="Ciudad" value="<?php echo $Ciudad; ?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
                <input type="text" class="form-control"  name="Estado" value="<?php echo $Estado; ?>">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pais</label>
                <input type="text" class="form-control"  name="Pais" value="<?php echo $Pais; ?>">
                </div>
                
        </div>  
                <input type="submit" class="btn btn-danger" value="Guardar" name="update">
                <a href="../index.php" class="btn btn-danger">Cancelar</a>
            </form>
        </div>

    <div />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>